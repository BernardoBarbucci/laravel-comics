<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comicsData = include(public_path('img/comics-card-info/comics.php'));

        return view('pages.home', ['comicsData' => $comicsData]);
    }
}
