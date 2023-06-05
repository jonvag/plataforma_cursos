<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Livewire\CourseStatus;
use App\Models\Course;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class)->name('home');
Route::get('/cursos',[CourseController::class, 'index'])->name('courses.index'); 
Route::get('/cursos/{course}',[CourseController::class, 'show'])->name('courses.show'); 
Route::post('/courses/{course}/enrolled',[CourseController::class, 'enrolled'])->middleware('auth')->name('courses.enrolled'); 
Route::get('/course-status/{course}', CourseStatus::class)->middleware('auth')->name('courses.status'); /* se asigno el controlador de esta ruta a un compnente (course-status) */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});