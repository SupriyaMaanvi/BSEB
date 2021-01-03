<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;

Route::get('/',[User::class,'homePage'])->name('homePage');
Route::get('/insert',[User::class,'insert'])->name('insertPage');
Route::post('/insert',[User::class,'insertData'])->name('insertData');
