<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id']; /* guarded van campos que no quiero que modifiquen fillable los campos que si quiero que modifiquen */

    public function getCompletedAttribute() {
        return $this->users->contains(auth()->user()->id);
        /* explicacion de la linea anterior
            $this->users aqui obtengo todos las lecciones completadas
            ->contains(auth()->user()->id Aqui obtengo si el usuario autenticado tiene esta leccion completada
            esto me devolvera un bollean
        */
    }     


    //relacion uno a uno

    public function description() {
        return $this->hasOne('App\Models\Description');
    }     


    //relacion uno a muchos unversa

    public function section(){
        return $this->belongsTo('App\Models\Section');
    }

    //relacion uno a muchos unversa

    public function platform(){
        return $this->belongsTo('App\Models\Platform');
    }

    //relacion muchos a muchos

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }  

    //relacion uno a uno polimorfica

    public function resource() {
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }  

    //relacion uno a muchos polimorfica

    public function comment() {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }  

    //relacion uno a muchos polimorfica

    public function reactions() {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }  
}
 