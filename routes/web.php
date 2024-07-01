<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    $response = Http::get('https://api.github.com/users/r5q0/repos');
    $data = $response->json();
    $repos = [];
    foreach ($data as $repo) {
        $repos[] = [
            'url' => $repo['html_url'],
            'description' => $repo['description'],
            'name' => ucwords(str_replace('-', ' ', $repo['name'])),
            "created" => $repo['created_at'],
            "updated" => $repo['updated_at'],
        ];
    }
    return view('projects', ['projects' => $repos]);
});
