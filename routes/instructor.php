<?php

use Illuminate\Support\Facades\Route;
use App\Http\LiveWire\InstructorCourses;

Route::redirect('', 'instructor/courses');

Route::get('courses', InstructorCourses::class)->middleware('can:Leer Cursos')->name('courses.index');/* en realidad el name de la ruta es instructor.courses.index pero en RouteProvider se le agrego un prefijo en el name */