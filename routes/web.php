<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
    //return view('page');
//});
Route::get('/', [App\Http\Controllers\ContactController::class, 'page']);
Route::get('/page', [App\Http\Controllers\ContactController::class, 'page']);

Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contact']);
Route::post('/contact-input', [App\Http\Controllers\ContactController::class, 'SaveNewContact'])->name('contact-input');

Route::get('/services', [App\Http\Controllers\ContactController::class, 'services']);
Route::get('/team', [App\Http\Controllers\ContactController::class, 'team']);
Route::get('/detail', [App\Http\Controllers\ContactController::class, 'detail']);
Route::get('/website', [App\Http\Controllers\ContactController::class, 'web']);
Route::get('/app', [App\Http\Controllers\ContactController::class, 'app']);
Route::get('/design', [App\Http\Controllers\ContactController::class, 'design']);
Route::get('/aboutus', [App\Http\Controllers\ContactController::class, 'aboutus']);
Route::get('/project', [App\Http\Controllers\ContactController::class, 'project']);
Route::post('home-input', [App\Http\Controllers\ContactController::class, 'SaveNewPhoto'])->name('home-input');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('delete/{id}',[App\Http\Controllers\HomeController::class,'destroy']);
Route::get('delete/{id}',[App\Http\Controllers\HomeController::class,'destroyproject']);

