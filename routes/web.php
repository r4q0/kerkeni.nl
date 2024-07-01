<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProjectsController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/projects', function () {
    return ProjectsController::renderProjects();
});
