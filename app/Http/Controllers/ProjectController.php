<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = collect(config('portfolio.projects'))->values();

        return view('projects.index', [
            'projects' => $projects,
        ]);
    }

    public function show(string $slug)
    {
        $project = collect(config('portfolio.projects'))
            ->firstWhere('slug', $slug);

        abort_if($project === null, 404);

        return view('projects.show', [
            'project' => $project,
        ]);
    }
}
