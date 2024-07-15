<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/projects', function () {
    return ProjectsController::renderProjects();
})->name('projects');

Route::get('/endeavours', function () {
    return view('Endeavours');
})->name('endeavours');