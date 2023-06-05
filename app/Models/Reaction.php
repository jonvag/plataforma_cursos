<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    protected $guarded = ['id']; /* guarded van campos que no quiero que modifiquen fillable los campos que si quiero que modifiquen */

    const LIKE = 1;
    const DISLIKE = 2;

    //relacion uno a muchos unversa

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function reactionable(){
        return $this->morphTo();
    }
}
 