@extends('layouts.app')

@section('title', 'About | ' . config('portfolio.name'))
@section('meta_description', 'Learn about Subhan Shahid, Aptech ADSE software engineering student, skills, and learning journey.')

@section('content')
    <section class="page-header">
        <div class="container">
            <span class="hero-badge">About Me</span>
            <h1>{{ config('portfolio.name') }}</h1>
            <p>{{ config('portfolio.title') }} — {{ config('portfolio.school') }}</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-7">
                    <span class="section-label">Introduction</span>
                    <h2 class="section-title">Who I am</h2>
                    <p>{{ config('portfolio.about.intro') }}</p>
                    <p>{{ config('portfolio.about.journey') }}</p>
                    <p>{{ config('portfolio.about.goals') }}</p>
                </div>
                <div class="col-lg-5">
                    <div class="info-card">
                        <h3 class="h4 mb-4">Quick Info</h3>
                        <ul class="list-unstyled d-grid gap-3 mb-0">
                            <li><strong>Name:</strong> {{ config('portfolio.name') }}</li>
                            <li><strong>Education:</strong> {{ config('portfolio.school') }}</li>
                            <li><strong>Progress:</strong> {{ config('portfolio.semesters_completed') }} semesters completed</li>
                            <li><strong>Location:</strong> {{ config('portfolio.location') }}</li>
                            <li><strong>Email:</strong> <a href="mailto:{{ config('portfolio.email') }}">{{ config('portfolio.email') }}</a></li>
                            <li><strong>GitHub:</strong> <a href="{{ config('portfolio.github_url') }}" target="_blank" rel="noopener noreferrer">{{ config('portfolio.github_username') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="info-card h-100">
                        <h3 class="h5">Education</h3>
                        <div class="about-timeline mt-3">
                            <div class="about-timeline-item">
                                <h3>Aptech ADSE</h3>
                                <p class="text-muted mb-0">{{ config('portfolio.semesters_completed') }} semesters completed with focus on web development, PHP, databases, and software engineering fundamentals.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-card h-100">
                        <h3 class="h5">What I Build</h3>
                        <ul class="feature-list mt-3 mb-0">
                            <li>Responsive landing pages with Bootstrap</li>
                            <li>PHP web apps with admin dashboards</li>
                            <li>Forms, authentication, and CRUD workflows</li>
                            <li>Database-driven business applications</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info-card h-100">
                        <h3 class="h5">Tools & Practices</h3>
                        <ul class="feature-list mt-3 mb-0">
                            <li>Git & GitHub for version control</li>
                            <li>SEO-friendly semantic HTML</li>
                            <li>Modern development with Cursor</li>
                            <li>JSON, XML, and CMS concepts</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding pt-0">
        <div class="container">
            <div class="text-center mb-5">
                <span class="section-label">Skills</span>
                <h2 class="section-title">Technical stack</h2>
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
@endsection
