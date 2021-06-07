<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\curenciesController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/register',[RegisterController::class,'index'])->name("register");
Route::post('/register',[RegisterController::class,'register']);

Route::get('/currency',[curenciesController::class,'index'])->name("currency");
Route::post('/currency',[curenciesController::class,'setCurrency']);

Route::get('/home', [homeController::class,'index'])->name("home");

Route::get('/', function () {
    return view('login');
});
