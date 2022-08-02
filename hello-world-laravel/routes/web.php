<?php

use App\Http\Controllers\SiteControlller;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteControlller::class, 'index']);
Route::get('/sair', [SiteControlller::class, 'sair']);


// Route::get('/', function () {
//     return view('welcome');
// });
