<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id']; /* guarded van campos que no quiero que modifiquen fillable los campos que si quiero que modifiquen */

    public function commentable(){
        return $this->morphTo();
    }

    //relacion uno a muchos unversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }


     //relacion uno a muchos polimorfica

     public function comments() {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }  

     //relacion uno a muchos polimorfica

     public function reactions() {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }  
}
 