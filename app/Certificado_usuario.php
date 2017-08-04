<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado_usuario extends Model
{
    protected $table = 'certificado_usuario';
    protected $fillable = ['curso_id', 'user_id','created_at','updated_at','deleted_at'];
}
