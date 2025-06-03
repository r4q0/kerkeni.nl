<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    $age = intval(Carbon::create(2007, 1, 11)->diffInYears(Carbon::now()));
    return view('welcome', ['age' => $age]);
})->name('home');

Route::get('/projects', function () {
    return ProjectsController::renderProjects();
})->name('projects');
