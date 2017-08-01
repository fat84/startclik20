<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificados extends Model
{
    protected $table = 'certificado';
    protected $fillable = ['curso_id', 'firma','informacion'];

    public function cursos()
    {
        return $this->belongsTo('App\Curso','curso_id','id');
    }
}
