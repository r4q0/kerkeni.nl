<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Carbon;

Route::get('/', function () {
    $currentJob = intval(Carbon::create(2024, 3, 11)->diffInMonths(Carbon::now()));
    $age = intval(Carbon::create(2007, 1, 11)->diffInYears(Carbon::now()));
    return view('welcome', ['age' => $age, 'currentJob' => $currentJob]);
})->name('home');

Route::get('/projects', function () {
    return ProjectsController::renderProjects();
})->name('projects');

Route::get('/endeavours', function () {
    return view('Endeavours');
})->name('endeavours');
