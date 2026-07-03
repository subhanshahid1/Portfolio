@extends('layouts.app')

@section('title', $project['title'] . ' | ' . config('portfolio.name'))
@section('meta_description', $project['short_description'])

@push('meta')
    <meta property="og:image" content="{{ asset($project['thumbnail']) }}">
@endpush

@section('content')
    <section class="page-header">
        <div class="container">
            <span class="hero-badge">Project Case Study</span>
            <h1>{{ $project['title'] }}</h1>
            <p>{{ $project['short_description'] }}</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <img src="{{ asset($project['thumbnail']) }}" alt="{{ $project['title'] }} main preview" class="project-hero-image mb-4">
                    <span class="section-label">Overview</span>
                    <h2 class="section-title">About this project</h2>
                    <p>{{ $project['description'] }}</p>

                    <h3 class="h4 mt-4 mb-3">Key Features</h3>
                    <ul class="feature-list">
                        @foreach ($project['features'] as $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="info-card mb-4">
                        <h3 class="h5 mb-3">Project Links</h3>
                        <div class="d-grid gap-2">
                            <a href="{{ $project['github_url'] }}" class="btn btn-accent" target="_blank" rel="noopener noreferrer">
                                <i class="bi bi-github me-1"></i> View on GitHub
                            </a>
                            @if ($project['live_url'])
                                <a href="{{ $project['live_url'] }}" class="btn btn-outline-accent" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-box-arrow-up-right me-1"></i> Live Demo
                                </a>
                            @else
                                <span class="text-muted small">Live demo not available for this project.</span>
                            @endif
                            <a href="{{ route('projects.index') }}" class="btn btn-outline-dark-custom">Back to Projects</a>
                        </div>
                    </div>

                    <div class="info-card">
                        <h3 class="h5 mb-3">Tech Stack</h3>
                        <div>
                            @foreach ($project['tech'] as $tech)
                                <span class="skill-badge">{{ $tech }}</span>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            @if (count($project['gallery']) > 1)
                <div class="mt-5 pt-2">
                    <span class="section-label">Gallery</span>
                    <h2 class="section-title">Screenshots</h2>
                    <div class="row g-3 gallery-grid">
                        @foreach ($project['gallery'] as $image)
                            <div class="col-md-6 col-lg-4">
                                <img src="{{ asset($image) }}" alt="{{ $project['title'] }} screenshot">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
