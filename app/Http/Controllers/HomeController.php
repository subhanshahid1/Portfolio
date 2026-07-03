<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $projects = collect(config('portfolio.projects'))
            ->where('featured', true)
            ->values();

        return view('home', [
            'projects' => $projects,
        ]);
    }
}
