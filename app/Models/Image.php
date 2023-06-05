<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $guarded = ['id']; /* guarded van campos que no quiero que modifiquen fillable los campos que si quiero que modifiquen */

    public function imageable(){
        return $this->morphTo();
    }
}
 