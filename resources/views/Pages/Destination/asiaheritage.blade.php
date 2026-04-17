<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    /* Header image */
.destination-header {
    height: 250px;
    background: linear-gradient(rgba(68, 124, 89, 0.3), rgba(83, 65, 16, 0.3)),
    background-size: cover;
    background-position: center;
}

/* Info boxes */
.info-box {
    background: #f5f9f7;
    padding: 15px;
    border-radius: 15px;
    transition: 0.3s;
}

.info-box:hover {
    background: #e8f3ef;
    transform: translateY(-3px);
}

/* Text */
.info-box h6 {
    font-weight: 600;
    margin-bottom: 5px;
}
</style>
</head>
<body>
    @extends("master")

@section("content")

<div class="container mt-5">

    <div class="card border-0 shadow-lg rounded-4 overflow-hidden">

        <!-- Image header -->
        <div class="destination-header"></div>

        <div class="card-body p-4">
            <a href="{{ route('destination.edit',$destination->id) }}" class="btn btn-edit align-self-start">Edit Destination</a>
            <img src="{{ asset('storage/images/' . $destination->image) }}" alt="{{ $destination->name }}" class="img-fluid rounded-4 mb-4">

            <!-- Title -->
            <h2 class="fw-bold mb-3">{{ $destination->name }}</h2>

            <!-- Location -->
            <p class="text-muted mb-4">
                📍 {{ $destination->location }}
            </p>

            <!-- Description -->
            <p class="mb-4">
                {{ $destination->description }}
            </p>

            <!-- Info Grid -->
            <div class="row text-center g-3">

                <div class="col-md-4">
                    <div class="info-box">
                        <h6>💰 Price</h6>
                        <p>Rp {{ number_format($destination->ticket_price) }}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box">
                        <h6>🕒 Hours</h6>
                        <p>{{ $destination->working_hours }}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-box">
                        <h6>📅 Days</h6>
                        <p>{{ $destination->working_days }}</p>
                    </div>
                </div>
                <div>
                    <a href="/destinations" class="btn btn-cancel">Back to Destinations</a>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
</body>
</html>