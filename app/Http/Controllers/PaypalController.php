<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use Session;
use App\Order;
use App\OrderItem;
use Cart;
use convertCurrency;
use Illuminate\Support\Facades\Input;

class PaypalController extends BaseController
{
    private $_api_context;

    public function __construct()
    {
        // setup PayPal api context
        $paypal_conf = \Config::get('paypal');
        $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
        $this->_api_context->setConfig($paypal_conf['settings']);
    }

    function convertCurrency($amount, $from, $to){
        $url  = "https://www.google.com/finance/converter?a=$amount&from=$from&to=$to";
        $data = file_get_contents($url);
        preg_match("/<span class=bld>(.*)<\/span>/",$data, $converted);
        $converted = preg_replace("/[^0-9.]/", "", $converted[1]);
        return round($converted, 3);
    }

    public function postPayment()
    {

        $payer = new Payer();
        $payer->setPaymentMethod('paypal');

        $items = array();
        $subtotal = 0;
        $cart = \Session::get('cart');
        $currency = 'USD';

        foreach(Cart::content() as $producto){
            $item = new Item();
            $item->setName($producto->name)
                ->setCurrency($currency)
                ->setDescription($producto->categoria_nombre)
                ->setQuantity(1)
                //->setPrice($producto->price);
                ->setPrice($this->convertCurrency($producto->price, "COP", "USD"));

            $items[] = $item;
            $subtotal += 1 * $this->convertCurrency($producto->price, "COP", "USD");
        }

        $item_list = new ItemList();
        $item_list->setItems($items);

        $details = new Details();
        $details->setSubtotal($subtotal);
            //->setShipping(100);

        $total = $subtotal;

        $amount = new Amount();
        $amount->setCurrency($currency)
            ->setTotal($total)
            ->setDetails($details);

        $transaction = new Transaction();
        $transaction->setAmount($amount)
            ->setItemList($item_list)
            ->setDescription('Pedido de prueba en mi Laravel App Store');

        $redirect_urls = new RedirectUrls();
        $redirect_urls->setReturnUrl(\URL::route('payment.status'))
            ->setCancelUrl(\URL::route('payment.status'));

        $payment = new Payment();
        $payment->setIntent('Sale')
            ->setPayer($payer)
            ->setRedirectUrls($redirect_urls)
            ->setTransactions(array($transaction));

        try {
            $payment->create($this->_api_context);
        } catch (\PayPal\Exception\PPConnectionException $ex) {
            if (\Config::get('app.debug')) {
                echo "Exception: " . $ex->getMessage() . PHP_EOL;
                $err_data = json_decode($ex->getData(), true);
                exit;
            } else {
                die('Ups! Algo salió mal');
            }
        }

        foreach($payment->getLinks() as $link) {
            if($link->getRel() == 'approval_url') {
                $redirect_url = $link->getHref();
                break;
            }
        }

        // add payment ID to session
        Session::put('paypal_payment_id', $payment->getId());

        if(isset($redirect_url)) {
            // redirect to paypal
            return \Redirect::away($redirect_url);
        }

        return redirect('carrito')
            ->with('message', 'Ups! Error desconocido.');

    }

    public function getPaymentStatus()
    {
        // Get the payment ID before session clear
        $payment_id = Session::get('paypal_payment_id');

        // clear the session payment ID
        Session::forget('paypal_payment_id');

        $payerId = Input::get('PayerID');
        $token = Input::get('token');

        if (empty($payerId) || empty($token)) {
            return redirect('carritos')
                ->with('message', 'Hubo un problema al intentar pagar con Paypal');
        }

        $payment = Payment::get($payment_id, $this->_api_context);

        $execution = new PaymentExecution();
        $execution->setPayerId(Input::get('PayerID'));

        $result = $payment->execute($execution, $this->_api_context);


        if ($result->getState() == 'approved') {

            $this->saveOrder();

            Session::forget('cart');

            return redirect('carrito')
                ->with('message', 'Compra realizada de forma correcta');
        }
        return redirect('carrito')
            ->with('message', 'La compra fue cancelada');
    }

    protected function saveOrder()
    {
        $subtotal = 0;
        $cart = \Session::get('cart');
        $shipping = 100;

        foreach(Cart::content() as $producto){
            $subtotal += 1 * $producto->price;
        }

        $order = Order::create([
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'user_id' => \Auth::user()->id
        ]);

        foreach(Cart::content() as $producto){
            $this->saveOrderItem($producto, $order->id);
        }
    }

    protected function saveOrderItem($producto, $order_id)
    {
        $order_item = new OrderItem;
        $order_item->order_id = $order_id;
        $order_item->price = $producto->price;
        $order_item->quantity = 1;
        $order_item->curso_id = $producto->id;
        $order_item->save();
        /*OrderItem::create([
            'order_id' => $order_id,
            'price' => $producto->price,
            'quantity' => 1,
            'curso_id' => $producto->id,

        ]);*/
    }
}