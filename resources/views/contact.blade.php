@extends('layouts.app')

@section('title', 'Contact | ' . config('portfolio.name'))
@section('meta_description', 'Contact Subhan Shahid for internships, collaborations, and project opportunities.')

@section('content')
    <section class="page-header">
        <div class="container">
            <span class="hero-badge">Contact</span>
            <h1>Get In Touch</h1>
            <p>Have a question or opportunity? Send a message and I'll get back to you.</p>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="info-card h-100">
                        <span class="section-label">Direct Contact</span>
                        <h2 class="section-title h3">Let's talk</h2>
                        <p class="text-muted">You can reach me directly by email or use the contact form.</p>
                        <ul class="list-unstyled d-grid gap-3 mb-4">
                            <li>
                                <i class="bi bi-envelope text-accent me-2"></i>
                                <a href="mailto:{{ config('portfolio.email') }}">{{ config('portfolio.email') }}</a>
                            </li>
                            <li>
                                <i class="bi bi-github text-accent me-2"></i>
                                <a href="{{ config('portfolio.github_url') }}" target="_blank" rel="noopener noreferrer">github.com/{{ config('portfolio.github_username') }}</a>
                            </li>
                            <li>
                                <i class="bi bi-geo-alt text-accent me-2"></i>
                                {{ config('portfolio.location') }}
                            </li>
                        </ul>
                        <p class="small text-muted mb-0">Open to internships, freelance opportunities, and collaborations while completing my ADSE program.</p>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="contact-card">
                        @if (session('success'))
                            <div class="alert alert-success-custom mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" novalidate>
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="subject" class="form-label">Subject <span class="text-muted">(optional)</span></label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" value="{{ old('subject') }}">
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="6" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-accent">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
