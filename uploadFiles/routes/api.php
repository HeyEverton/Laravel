<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/upload', function(Request $request) {
    $array = ['error' => ''];

    if ($request->hasFile('teste')) {
        
        $array['error'] = 'Foi enviado';

    } else {
        $array['error'] = 'Arquivo não foi enviado.';
    }

    return $array;
});




