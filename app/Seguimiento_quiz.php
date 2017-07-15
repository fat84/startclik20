<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento_quiz extends Model
{
    //
    protected $table = 'seguimiento_quiz';
    protected $fillable = [
        'user_id', 'quiz_id', 'created_at','updated_at'
    ];

    public function user()
    {
        return $this->hasMany('App\User', 'user_id', 'id');
    }
    public function quiz_id()
    {
        return $this->hasMany('App\Quiz_leccion', 'quiz_id', 'id');
    }
}
