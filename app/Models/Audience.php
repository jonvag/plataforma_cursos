<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Audience extends Model
{
    protected $guarded = ['id']; /* guarded van campos que no quiero que modifiquen fillable los campos que si quiero que modifiquen */
    use HasFactory;

    //relacion uno a muchos unversa

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}
