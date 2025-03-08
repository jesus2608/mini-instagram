<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.index');
});
Route::get('/register', [RegisterController::class, 'create'])->name('register.create');  //Formulario de registro
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [SessionController::class, 'create'])->name('login.login');  //Formulario de login
Route::post('/login', [SessionController::class, 'store'])->name('login.store');  //Iniciar sesión
Route::post('/logout', [SessionController::class, 'destroy'])->name('login.logout');  //Cerrar sesión 
Route::get('/post', [PostController::class, 'create'])->name('post.create')->middleware('auth');
Route::post('/post', [PostController::class, 'store'])->name('post.store');
Route::get('/post/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
Route::put('/post/put/{id}', [PostController::class, 'update'])->name('post.put');
Route::delete('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
Route::get('/post/post', [PostController::class, 'show'])->name('post.show');