@extends("master")

@section('content')

<!-- HERO SECTION -->
<section class="hero d-flex align-items-center text-white text-center">
    <div class="container">
        <h1 class="display-3 fw-bold mb-3">Explore Beautiful Destinations</h1>
        <p class="lead mb-4 opacity-75">
            Find your next adventure with 
            <span class="brand-name">C.J Travel</span> ✈️
        </p>

        <a href="/destinations" class="btn btn-main btn-lg px-5 py-2">
            Get Started →
        </a>
    </div>
</section>

<!-- INTRO SECTION -->
<section class="py-5 text-center intro-section">
    <div class="container">
        <h2 class="fw-bold mb-3">Why Travel With Us?</h2>
        <p class="text-muted mx-auto" style="max-width: 600px;">
            We provide the best travel experiences with affordable prices, 
            comfortable stays, and unforgettable memories 🌴
        </p>
    </div>
</section>

<!-- FEATURE CARDS -->
<section class="pb-5 feature-section">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card feature-card text-center p-4">
                    <div class="icon mb-3">🌍</div>
                    <h5 class="fw-semibold">Amazing Places</h5>
                    <p class="text-muted small">
                        Discover beautiful destinations around the world.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card text-center p-4">
                    <div class="icon mb-3">💰</div>
                    <h5 class="fw-semibold">Affordable</h5>
                    <p class="text-muted small">
                        Travel without breaking your budget.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card feature-card text-center p-4">
                    <div class="icon mb-3">⭐</div>
                    <h5 class="fw-semibold">Best Service</h5>
                    <p class="text-muted small">
                        Top-rated experiences for every traveler.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection