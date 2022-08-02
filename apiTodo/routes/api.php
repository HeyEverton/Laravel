<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;

Route::get('/ping', function() {
    return [
        'pong' => true
    ];
});

Route::middleware('auth:api')->post('/todo', [ApiController::class, 'createTodo']);
Route::post('auth/login', [AuthController::class, 'login']);

Route::get('/todos', [ApiController::class, 'readAll']);
Route::get('/todo/{id}', [ApiController::class, 'readTodo']);
Route::middleware('auth:api')->put('/todo/{id}', [ApiController::class, 'updateTodo']);
Route::middleware('auth:api')->delete('/todo/{id}', [ApiController::class, 'deleteTodo']);

Route::get('/unautenticated', function() {
    return ['error' => 'Usuário não logado!'];
})->name('login');

Route::post('/user', [AuthController::class, 'create']); 
Route::middleware('auth:api')->get('/auth/logout', [AuthController::class, 'logout']);
Route::post('/auth', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/auth/me', [AuthController::class, 'me']);


//middleware('auth:sanctum')->