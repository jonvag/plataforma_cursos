<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = ['id']; /* guarded van campos que no quiero que modifiquen fillable los campos que si quiero que modifiquen */

    //relacion uno a muchos unversa

    public function user(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    //relacion uno a muchos unversa

    public function course(){
        return $this->belongsTo('App\Models\Course', 'user_id');
    }
}
