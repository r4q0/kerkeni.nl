<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class ProjectsController extends Controller
{

    public static function renderProjects()
    {
        if (session()->has('projects')) {
            $repos = session('projects');
        } else {
            $response = Http::get('https://api.github.com/users/r4q0/repos');
            $data = $response->json();
            $repos = [];

            $data = collect($data)->sortByDesc('updated_at')->values()->all();

            foreach ($data as $repo) {
                $repos[] = [
                    'url' => $repo['html_url'],
                    'description' => $repo['description'],
                    'name' => ucwords(str_replace('-', ' ', $repo['name'])),
                    "created" => self::formatTimestamp($repo['created_at']),
                    "updated" => self::formatTimestamp($repo['updated_at']),
                ];
            }
            session(['projects' => $repos]);
        }
        return view('projects', ['projects' => $repos]);
    }

    public static function formatTimestamp($timestamp)
    {
        $date = Carbon::parse($timestamp);
        return $date->diffForHumans();

    }
}
