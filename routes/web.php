<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ProjectsController;

Route::get('/', function () {
    return ProjectsController::renderProjects();
});

Route::get('/projects', function () {

});
