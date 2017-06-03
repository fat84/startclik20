<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foro__respuesta extends Model
{
    protected $table = 'foro_respuesta';
    protected $fillable = [
        'foro_post_id', 'post', 'user_id', 'created_at','updated_at'
    ];
}
