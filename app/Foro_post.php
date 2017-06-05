<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foro_post extends Model
{
    protected $table = 'foro_post';
    protected $fillable = [
        'foro_id', 'user_id', 'pos', 'created_at','updated_at','titulo'
    ];
}
