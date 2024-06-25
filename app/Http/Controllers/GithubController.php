<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GithubController extends Controller
{

  public  function getData(){
    $response = Http::get('https://api.github.com/users/r5q0/repos');
    $data = $response->json();
    $repos = [];
    foreach($data as $repo){
      $repos[] = [
        'url' => $repo['html_url'],
        'description' => $repo['description'],
        'name' => str_replace('-', ' ', $repo['name'])
      ];
    }
    return view('projects', ['repos' => $repos]);
  }
}
