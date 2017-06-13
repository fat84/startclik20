<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = 'suscripcion';
    protected $fillable = ['id','curso','user_id','created_at','updated_at','pago'];
}
