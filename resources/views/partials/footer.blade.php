<footer class="site-footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h5>{{ config('portfolio.name') }}</h5>
                <p>{{ config('portfolio.title') }} at {{ config('portfolio.school') }}.</p>
                <a href="{{ config('portfolio.github_url') }}" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github me-1"></i> github.com/{{ config('portfolio.github_username') }}
                </a>
            </div>
            <div class="col-6 col-lg-2">
                <h5>Pages</h5>
                <ul class="list-unstyled d-grid gap-2">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('projects.index') }}">Projects</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
            <div class="col-6 col-lg-3">
                <h5>Projects</h5>
                <ul class="list-unstyled d-grid gap-2">
                    @foreach (config('portfolio.projects') as $project)
                        <li><a href="{{ route('projects.show', $project['slug']) }}">{{ $project['title'] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-lg-3">
                <h5>Contact</h5>
                <p class="mb-2">
                    <a href="mailto:{{ config('portfolio.email') }}">{{ config('portfolio.email') }}</a>
                </p>
                <p class="mb-0">{{ config('portfolio.location') }}</p>
            </div>
        </div>
        <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between gap-2">
            <span>&copy; {{ date('Y') }} {{ config('portfolio.name') }}. All rights reserved.</span>
            <span>Built with Laravel & Bootstrap</span>
        </div>
    </div>
</footer>
