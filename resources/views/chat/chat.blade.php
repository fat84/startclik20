@extends('layouts.app')
@section('title','Chat')
@section('content')

    <style>
        .chat-messages {
            padding: 20px;
            height: 300px;
            position: relative;
            overflow: hidden; }
        .chat-messages .message {
            margin-bottom: 12px; }
         .chat-messages .message .message-content {
            color: #594939;
            padding: 10px 20px;
            background-color: #fcf6ee;
            border-radius: 20px 20px 20px 0px;
            max-width: 80%;
            display: inline-block;
            text-align: left; }
        .chat-messages .message.self {
            text-align: right; }
         .chat-messages .message.self .message-content {
            border-radius: 20px 20px 0px 20px;
            background-color: #e2efff;
            color: #2A4E7F; }

       .chat-controls {
            padding: 10px;
            padding-top: 0px;
            border-top: 1px solid rgba(0, 0, 0, 0.1); }
       .chat-controls .message-input {
            border: 1px solid transparent;
            background-color: #fff;
            padding: 10px;
            width: 100%;
            display: block;
            border-radius: 0px; }
        .chat-controls .message-input:focus {
            outline: none;
            border-bottom: 1px solid #047bf8; }
         .chat-controls .chat-extra {
            text-align: left;
            padding-left: 0px;
            padding-top: 10px; }
        .chat-controls .chat-extra a {
            display: inline-block;
            margin-left: 10px;
            font-size: 16px;
            position: relative; }
         .chat-controls .chat-extra a .extra-tooltip {
            background-color: rgba(0, 0, 0, 0.9);
            color: #fff;
            font-weight: 600;
            font-size: 0.63rem;
            text-transform: uppercase;
            display: inline-block;
            padding: 2px 7px;
            border-radius: 4px;
            position: absolute;
            top: -20px;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            white-space: nowrap;
            display: none; }
         .chat-controls .chat-extra a:hover {
            text-decoration: none; }
         .chat-controls .chat-extra a:hover .extra-tooltip {
            display: block; }

    </style>

    <div class="row">
       <div class="col-md-5">
           <div class="card">
               <div class="card-block">
                   <ul id="usuariosOnline">

                   </ul>
               </div>
           </div>
       </div>
        <div class="col-md-7">
           <div class="card">
               <div class="card-block" id="chatHistorial">
                   <div id="mensajes">
                       <div class="chat-messages chatUsuario">
                           <div class="message">
                               <div class="message-content">¿Hola, como puedo ayudarte?</div>
                           </div>
                           <div class="date-break">Mon 10:20am</div>
                           <div class="message">
                               <div class="message-content">Hola, mi nombre es Mike, voy a estar encantados de ayudarle
                               </div>
                           </div>
                           <div class="message self">
                               <div class="message-content">Hola, He intentado ordenar este curso y me sigue mostrando el código de error.
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="chat-controls chatUsuario">
                       <input class="message-input" placeholder="Escribir mensaje..." type="text">
                   </div>

               </div>
           </div>
       </div>


    </div>



<script>
    $( document ).ready(function() {
        var parametros = {
        };
        var ruta = '/chatOnline';
        $.ajax({
            url: ruta,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            dataType: 'json',
            data: parametros,
            success: function (data) {
                const a = data.usuariosOnline;
                b = a;
                usuarios = "";
                for(var i = 0 in b){
                    usuarios += '<li style="list-style-type: disc;color: greenyellow;">' +
                        '<a href="#" style="color: #0c0c0c;" onclick="abrirChat(\''+b[i].id+'\')">'+b[i].name+b[i].apellidos+' ('+b[i].rol+')</a>' +
                        '</li>';
                }
                $('#usuariosOnline').html(usuarios);
            }
        });
    });

    function abrirChat(idUsuario){

        var parametros = {
            'idUsuario':idUsuario
        };
        var ruta = '/chatUsuario';
        $.ajax({
            url: ruta,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            type: 'POST',
            dataType: 'json',
            data: parametros,
            success: function (data) {
                const a = data.chat;
                b = a;
                console.log(data);
                mensajes = "";
                for(var i = 0 in b){
                 mensajes += ' <div class="message">\n' +
                     '<div class="message-content">¿Hola, como puedo ayudarte?</div>\n' +
                     '</div>';
                }
                $('#chatUsuario').html(mensajes);

            }
        });

    }
    $(function () {
        $('.message-input').on('keypress', function (e) {
            if (e.which == 13) {
                $('.chat-messages').append('<div class="message self"><div class="message-content">' + $(this).val() + '</div></div>');
                $(this).val('');
                var $messages_w = $('.chat-messages');
                $messages_w.scrollTop($messages_w.prop("scrollHeight"));
                $messages_w.perfectScrollbar('update');
                return false;
            }
        });
        $('.chat-messages').perfectScrollbar();



    });
</script>


@stop