
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* HERO BACKGROUND */
.hero {
    height: 90vh;
    background: linear-gradient(rgba(38, 73, 56, 0.25), rgba(46, 102, 85, 0.25)),
                url('https://www.dejogja.co.id/wp-content/uploads/2025/03/29-KINTAMANI-BALI-IMG-2.jpg');
    background-size: cover;
    background-position: center;
}
 </style>

</head>
<body>
    @extends("master")

@section('content')

<!-- HERO SECTION -->
<section class="hero d-flex align-items-center text-white text-center">
    <div class="container">
        <h1 class="display-4 fw-bold mb-3">Explore Beautiful Destinations</h1>
        <p class="lead mb-4">Find your next adventure with C.J Travel ✈️</p>
   <a href="#" class="btn btn-warning btn-lg fw-semibold px-4 mt-3">
    Get Started
</a>
    </div>
</section>

<!-- INTRO SECTION -->
<section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Why Travel With Us?</h2>
        <p class="text-muted">
            We provide the best travel experiences with affordable prices, comfortable stays, 
            and unforgettable memories 🌴
        </p>
    </div>
</section>

<!-- FEATURE CARDS -->
<section class="pb-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center p-4">
                    <h5>🌍 Amazing Places</h5>
                    <p class="text-muted small">Discover beautiful destinations around the world.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center p-4">
                    <h5>💰 Affordable</h5>
                    <p class="text-muted small">Travel without breaking your budget.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm text-center p-4">
                    <h5>⭐ Best Service</h5>
                    <p class="text-muted small">Top-rated experiences for every traveler.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection

</body>
</html>