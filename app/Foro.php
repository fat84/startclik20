<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foro extends Model
{
    protected $table = 'foro';
    protected $fillable = [
        'titulo', 'curso_id', 'user_id', 'created_at','updated_at','slug'
    ];
}
