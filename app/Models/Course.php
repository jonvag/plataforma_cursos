<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status']; /* guarded van campos que no quiero que modifiquen fillable los campos que si quiero que modifiquen */
    protected $withCount = ['students', 'reviews'];
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function getRatingAttribute(){
        if($this->reviews_count){
            return round($this->reviews->avg('rating'), 1);

        }else{
            return 5; /* es la calificacion si nadie ha visto el curso */
        }    
    }


    public function getRouteKeyName(){
        return "slug";
    }
// query scopes vido de laravel plataforma de cursos
    public function scopeCategory($query, $category_id){
        if ($category_id) {
            return $query->where('category_id', $category_id);
        }
    }

    public function scopeLevel($query, $level_id){
        if ($level_id) {
            return $query->where('level_id', $level_id);
        }
    }

    //relacion uno a muchos unversa

    public function teacher(){
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    //relacion uno a muchos

    public function level() {
        return $this->belongsTo('App\Models\Level');
    }  

    //relacion uno a muchos

    public function category() {
        return $this->belongsTo('App\Models\Category');
    }  

    //relacion uno a muchos

    public function Price() {
        return $this->hasMany('App\Models\Price');
    }  

    //relacion muchos a muchos

    public function students() {
        return $this->belongsToMany('App\Models\User');
    }  

    //relacion uno a muchos

    public function reviews() {
        return $this->hasMany('App\Models\Review');
    }  

    //relacion uno a muchos

    public function requeriments() {
        return $this->hasMany('App\Models\Requeriment');
    }  

    //relacion uno a muchos

    public function goals() {
        return $this->hasMany('App\Models\Goal');
    }  

    //relacion uno a muchos

    public function audiences() {
        return $this->hasMany('App\Models\Audience');
    }  

    //relacion uno a muchos

    public function sections() {
        return $this->hasMany('App\Models\Section');
    }  

    //relacion uno a uno polimorfica

    public function image() {
        return $this->morphOne('App\Models\Image', 'imageable');
    }  

    
    //relacion uno a uno polimorfica

    public function lessons() {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }  
}
