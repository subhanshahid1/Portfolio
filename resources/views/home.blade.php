@extends('layouts.app')

@section('title', config('portfolio.name') . ' | Software Engineering Student Portfolio')
@section('meta_description', config('portfolio.tagline'))

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-6">
                    <span class="hero-badge">{{ config('portfolio.title') }}</span>
                    <h1 class="hero-title">Hi, I'm {{ config('portfolio.name') }}</h1>
                    <p class="hero-subtitle">{{ config('portfolio.tagline') }}</p>
                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="{{ route('projects.index') }}" class="btn btn-accent">View My Projects</a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-accent">Contact Me</a>
                        <a href="{{ config('portfolio.github_url') }}" class="btn btn-outline-accent" target="_blank" rel="noopener noreferrer">
                            <i class="bi bi-github me-1"></i> GitHub
                        </a>
                    </div>
                    <div class="hero-profile-card">
                        <img src="{{ asset('images/profile.png') }}" alt="{{ config('portfolio.name') }} portrait" class="profile-image mb-3">
                        <div>
                            <p class="mb-3">Hello! I am a software engineering student at Aptech, building responsive web experiences using PHP, Laravel, and modern frontend tools.</p>
                            <div class="d-flex flex-wrap gap-2">
                                <a href="{{ config('portfolio.linkedin_url') }}" class="btn btn-outline-dark-custom btn-sm" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-linkedin me-1"></i> LinkedIn
                                </a>
                                <a href="{{ route('contact') }}" class="btn btn-outline-accent btn-sm">Request Resume</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <img src="{{ asset('images/profile.png') }}" alt="{{ config('portfolio.name') }} portrait" class="profile-hero-image">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row align-items-end mb-5">
                <div class="col-lg-8">
                    <span class="section-label">About Me</span>
                    <h2 class="section-title">Software engineering student building real projects</h2>
                    <p class="section-intro">{{ config('portfolio.about.intro') }}</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
                    <a href="{{ route('about') }}" class="btn btn-outline-dark-custom">Read More</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="row g-4 align-items-start">
                <div class="col-lg-8">
                    <div class="info-card profile-card h-100">
                        <h3 class="h5 mb-3">Connect with me</h3>
                        <p class="mb-3">I’m active on LinkedIn and my Indeed profile is available using the same email address below.</p>
                        <ul class="list-unstyled mb-0">
                            <li><strong>LinkedIn:</strong> <a href="{{ config('portfolio.linkedin_url') }}" target="_blank" rel="noopener noreferrer">{{ config('portfolio.linkedin_url') }}</a></li>
                            <li><strong>Indeed:</strong> Available via <a href="mailto:{{ config('portfolio.email') }}">{{ config('portfolio.email') }}</a></li>
                            <li><strong>Resume:</strong> {{ config('portfolio.resume_note') }}</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-card h-100 text-center p-4">
                        <h3 class="h5 mb-3">Profile</h3>
                        <img src="{{ asset('images/profile.png') }}" alt="{{ config('portfolio.name') }} profile" class="profile-card-image mb-3">
                        <p class="mb-0">{{ config('portfolio.name') }}<br>{{ config('portfolio.title') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-label">Skills</span>
                <h2 class="section-title">Technologies I work with</h2>
            </div>
            <div class="row g-4">
                @foreach (config('portfolio.skills') as $category => $items)
                    <div class="col-md-6 col-xl-3">
                        <div class="skill-card">
                            <h3>{{ ucfirst($category) }}</h3>
                            <div>
                                @foreach ($items as $skill)
                                    <span class="skill-badge">{{ $skill }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-end gap-3 mb-5">
                <div>
                    <span class="section-label">Featured Work</span>
                    <h2 class="section-title mb-0">Selected projects</h2>
                </div>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-dark-custom">View All Projects</a>
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

    <section class="section-padding pt-0">
        <div class="container">
            <div class="cta-section">
                <span class="section-label">Let's Connect</span>
                <h2 class="section-title">Interested in working together?</h2>
                <p class="section-intro mx-auto mb-4">I'm open to internships, collaborations, and project opportunities while continuing my ADSE journey.</p>
                <a href="{{ route('contact') }}" class="btn btn-accent">Get In Touch</a>
            </div>
        </div>
    </section>
@endsection
