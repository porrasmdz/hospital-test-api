<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('v1/patients', App\Http\Controllers\Api\V1\PatientController::class)->only(['index','show']);
Route::post('v1/patients','App\Http\Controllers\Api\V1\PatientController@store');
Route::put('v1/patients/{id}','App\Http\Controllers\Api\V1\PatientController@update');
Route::delete('v1/patients/{id}', 'App\Http\Controllers\Api\V1\PatientController@destroy');


Route::apiResource('v1/histories', App\Http\Controllers\Api\V1\HistoryController::class)->only(['index','show']);
Route::post('v1/histories','App\Http\Controllers\Api\V1\HistoryController@store');
Route::put('v1/histories/{id}','App\Http\Controllers\Api\V1\HistoryController@update');
Route::delete('v1/histories/{id}', 'App\Http\Controllers\Api\V1\HistoryController@destroy');

Route::apiResource('v1/citations', App\Http\Controllers\Api\V1\CitationController::class)->only(['index','show']);
Route::post('v1/citations','App\Http\Controllers\Api\V1\CitationController@store');
Route::put('v1/citations/{id}','App\Http\Controllers\Api\V1\CitationController@update');
Route::delete('v1/citations/{id}', 'App\Http\Controllers\Api\V1\CitationController@destroy');


Route::apiResource('v1/users', App\Http\Controllers\Api\V1\UserController::class)
->only(['index','show'])
->middleware('auth:sanctum');
Route::post('v1/users','App\Http\Controllers\Api\V1\UserController@store')
->middleware('auth:sanctum');
Route::put('v1/users/{id}','App\Http\Controllers\Api\V1\UserController@update')
->middleware('auth:sanctum');
Route::delete('v1/users/{id}', 'App\Http\Controllers\Api\V1\UserController@destroy')
->middleware('auth:sanctum');


Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
