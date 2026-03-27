<?php

use App\Http\Controllers\BranchController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
 Route::resources([
    'users'=>UserController::class,
    'students'=>StudentsController::class,
     'regions'=>RegionController::class,
     'branches'=>BranchController::class,
     'courses'=>CourseController::class,
     'classes'=>ClassesController::class,
     'teachers'=>TeacherController::class,
 ]);
