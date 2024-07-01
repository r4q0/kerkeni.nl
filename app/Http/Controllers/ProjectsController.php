<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectsController extends Controller
{

    public static function renderProjects()
    {
        if (session()->has('projects')) {
        } else {
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
            session(['projects' => $repos])->setLifetime(now()->addHours(12));
        }
        return view('projects', ['projects' => session('projects')]);
    }
}
