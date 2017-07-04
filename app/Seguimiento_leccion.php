<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seguimiento_leccion extends Model
{
    //
    protected $table = 'seguimiento_lecciones';
    protected $fillable = [
        'user_id', 'leccion_id', 'created_at','updated_at'
    ];

    public function user()
    {
        return $this->hasMany('App\User', 'user_id', 'id');
    }
    public function leccion_id()
    {
        return $this->hasMany('App\Leccion', 'leccion_id', 'id');
    }
}
