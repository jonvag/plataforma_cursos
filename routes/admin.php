<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;


Route::get('',[HomeController::class, 'index'])->middleware('can:Ver Dashboard')->name('home'); 

Route::resource('roles', RoleController::class)->names('roles');/* para colocar can en una ruta tipo resources e hace directamentre en el controlador */
Route::resource('users', UserController::class)->only(['index', 'edit', 'update'])->names('users');