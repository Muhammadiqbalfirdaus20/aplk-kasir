<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


route::get('/login', [UserController::class, 'login'])->name('login');
route::get('/register',[UserController::class,'register'])->name('register');
route::post('/register',[UserController::class,'registerstore'])->name('register.store');
route::resource('users',UserController::class);


