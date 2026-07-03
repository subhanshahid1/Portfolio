@extends('layouts.app')

@section('title', 'Projects | ' . config('portfolio.name'))
@section('meta_description', 'Explore web development projects by Subhan Shahid including a Bootstrap landing page and Elegance Salon management system.')

@section('content')
    <section class="page-header">
        <div class="container">
            <span class="hero-badge">Portfolio</span>
            <h1>My Projects</h1>
            <p>Real projects built during my software engineering journey, with code available on GitHub.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-5">
                <p class="section-intro mb-0">Each project reflects different skills — from frontend landing page design to full-stack PHP applications with admin panels.</p>
                <a href="{{ config('portfolio.github_url') }}" class="btn btn-outline-dark-custom" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github me-1"></i> View All on GitHub
                </a>
            </div>

            <div class="row g-4">
                @foreach ($projects as $project)
                    <div class="col-lg-6">
                        <article class="project-card">
                            <img src="{{ asset($project['thumbnail']) }}" alt="{{ $project['title'] }} preview">
                            <div class="project-card-body">
                                <h3>{{ $project['title'] }}</h3>
                                <p>{{ $project['short_description'] }}</p>
                                <div class="mb-3">
                                    @foreach ($project['tech'] as $tech)
                                        <span class="skill-badge">{{ $tech }}</span>
                                    @endforeach
                                </div>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="{{ route('projects.show', $project['slug']) }}" class="btn btn-accent btn-sm">View Details</a>
                                    <a href="{{ $project['github_url'] }}" class="btn btn-outline-dark-custom btn-sm" target="_blank" rel="noopener noreferrer">GitHub</a>
                                    @if ($project['live_url'])
                                        <a href="{{ $project['live_url'] }}" class="btn btn-outline-accent btn-sm" target="_blank" rel="noopener noreferrer">Live Demo</a>
                                    @endif
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
