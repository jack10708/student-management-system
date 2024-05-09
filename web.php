<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\homecontroller;
use Illuminate\Support\Facades\Route;

route::get('/',[homecontroller::class,'home'])->name('home');


route::get('/register',[authcontroller::class,'register'])->name('register');
route::POST('/register_user',[authcontroller::class,'register_user'])->name('register_user');



