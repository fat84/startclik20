<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuesta_user extends Model
{
    //
    protected $table = 'respuesta_user';
    protected $fillable = [
        'user_id', 'respuesta_id', 'correcta','score', 'created_at','updated_at'
    ];

    public function user()
    {
        return $this->hasMany('App\User', 'user_id', 'id');
    }
    public function respuesta_user()
    {
        return $this->hasMany('App\Quiz_respuesta_leccion', 'quiz_respuesta_leccion_id', 'id');
    }
}
