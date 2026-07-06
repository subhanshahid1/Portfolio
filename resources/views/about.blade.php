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
                <div class="col-12">
                    <div class="section-heading mb-4">
                        <span class="section-label">Academic Profile</span>
                        <h2 class="section-title">Academic Timeline</h2>
                        <p class="section-intro mb-0">A structured overview of formal education, intellectual focus, and academic distinction.</p>
                    </div>
                </div>

                @if (!empty($education))
                    @foreach ($education as $entry)
                        <div class="col-12">
                            <div class="academic-timeline">
                                <div class="academic-timeline-item">
                                    <div class="timeline-card">
                                        <div class="row g-4 align-items-start">
                                            <div class="col-lg-7">
                                                <p class="timeline-period">{{ $entry['period'] }}</p>
                                                <h3 class="timeline-institution">{{ $entry['institution'] }}</h3>
                                                <p class="timeline-degree">{{ $entry['degree'] }}</p>
                                                <p class="timeline-summary">A rigorous academic path centered on software engineering, system design, and applied web development practice.</p>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="timeline-stat-card">
                                                    <span class="timeline-stat-label">Academic Performance</span>
                                                    <span class="timeline-stat-value">{{ $entry['achievement'] }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row g-4 mt-1">
                                            <div class="col-md-6">
                                                <div class="timeline-subsection">
                                                    <h4>Advanced Relevant Coursework</h4>
                                                    <ul class="timeline-list">
                                                        @foreach ($entry['coursework'] as $course)
                                                            <li>{{ $course }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="timeline-subsection">
                                                    <h4>Honors & Academic Awards</h4>
                                                    <ul class="timeline-list">
                                                        @foreach ($entry['honors'] as $honor)
                                                            <li>{{ $honor }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
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
