<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'chat';
    protected $fillable = ['user_receptor', 'user_remitente','mensaje','created_at','updated_at'];
}
