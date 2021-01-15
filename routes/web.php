<?php

use App\Http\Controllers\scrap;
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


 Route::get("/",[scrap::class,'first']);
 Route::get("/{id}",[scrap::class,'withparam']);
 Route::get("/{id}/{idd}",[scrap::class,'withparam']);
 Route::get("/{id}/{idd}/{idd3}",[scrap::class,'withparam']);
 Route::get("/{id}/{idd}/{idd3}/{idd4}",[scrap::class,'withparam']);


