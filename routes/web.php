<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ContactController;

Route::get('/',[HomeController::class,'HomeIndex']);
Route::post('/ContactSend',[HomeController::class,'ContactSend']);

Route::get('/Course',[CourseController::class,'CoursePage']);
Route::get('/Policy',[PolicyController::class,'PolicyPage']);
Route::get('/Project',[ProjectController::class,'ProjectPage']);
Route::get('/Terms',[TermsController::class,'TermsPage']);
Route::get('/Contact',[ContactController::class,'Contactpage']);

