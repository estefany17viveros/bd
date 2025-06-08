<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::resource('computer', ComputerController ::class);

Route::resource('area',AreaController::class);

Route::resource('trainingcenter',TrainingCenterController::class);