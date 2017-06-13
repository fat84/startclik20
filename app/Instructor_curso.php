<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor_curso extends Model
{
    protected $table = 'instructor_curso';

    protected $fillable = [
        'instructor_id', 'curso_id','created_at','updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function instructores()
    {
        return $this->belongsToMany('App\User');
    }

    public function cursos(){
        return $this->belongsToMany('App\Curso');
    }
}
