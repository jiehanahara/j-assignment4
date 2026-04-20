@extends("master")

@section("content")

<div class="container mt-5">

    <div class="destination-card">

        <!-- IMAGE HEADER -->
        <div class="destination-header"
             style="background-image: url('{{ asset('storage/' . $destination->image) }}');">
        </div>

        <div class="p-4">

            <!-- TOP ACTION -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <a href="/destinations" class="btn btn-cancel">
                    ← Back
                </a>

                <a href="{{ route('destination.edit',$destination->id) }}" 
                   class="btn btn-main">
                    Edit
                </a>
            </div>

            <!-- TITLE -->
            <h2 class="fw-bold mb-2">{{ $destination->name }}</h2>

            <!-- LOCATION -->
            <p class="text-muted mb-4">
                📍 {{ $destination->location }}
            </p>

            <!-- DESCRIPTION -->
            <p class="mb-4 description-text">
                {{ $destination->description }}
            </p>

            <!-- INFO CARDS -->
            <div class="row g-3 text-center">

                <div class="col-md-4">
                    <div class="info-card">
                        <div class="icon">💰</div>
                        <h6>Price</h6>
                        <p>Rp {{ number_format($destination->ticket_price) }}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-card">
                        <div class="icon">🕒</div>
                        <h6>Hours</h6>
                        <p>{{ $destination->working_hours }}</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="info-card">
                        <div class="icon">📅</div>
                        <h6>Days</h6>
                        <p>{{ $destination->working_days }}</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection