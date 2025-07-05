<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/','home');

Route::get('/',[PageController::class,'home']);
Route::get('/about',[PageController::class,'about']);
Route::get('/post',[PageController::class,'post']);
Route::get('/contact',[PageController::class,'contact']);
Route::get('/form',[FormController::class,'form'])->name('form');
Route::post('/form',[FormController::class,'store'])->name('store');
Route::post('/contact_us',[PageController::class,'create_contact'])->name('create_contact');

// Route::get('about', function () {
//     return view('about');
// });

// Route::get('post', function () {
//     return view('post');
// });

// Route::get('contact', function () {
//     return view('contact');
// });
