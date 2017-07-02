<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Curso extends Model
{
    use SoftDeletes;

    protected $table = 'cursos';
    protected $dates = ['deleted_at'];

    protected $fillable = ['nombre', 'categoria_id', 'descripcion','imagen','video_promo','created_at','updated_at','empresa_id', 'deleted_at'];


    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categoria_id','id');
    }

    public function modulo(){
        return $this->hasMany('App\Modulo','curso_id','id');
    }

    public function instructores()
    {
        return $this->belongsToMany('App\User');
    }

    public function instructor_curso(){
        return $this->belongsToMany('App\Instructor_cuso');
    }

}
