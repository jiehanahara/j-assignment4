@extends('master')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="detail-card p-4" style="max-width: 600px; width: 100%;">

        <!-- TOP -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="/attractions" class="btn btn-cancel">
                ← Back
            </a>

            <a href="/attractions/{{ $attraction->id }}/edit" class="btn btn-main">
                Edit
            </a>
        </div>

        <!-- TITLE -->
        <h2 class="fw-bold mb-3 text-center">
            🎡 {{ $attraction->name }}
        </h2>

        <!-- DESTINATION BADGE -->
        <div class="text-center mb-4">
            <span class="destination-badge">
                📍 {{ $attraction->destination->name ?? 'No destination' }}
            </span>
        </div>

        <!-- DESCRIPTION -->
        <div class="description-box mb-4">
            {{ $attraction->description }}
        </div>

        <!-- EXTRA INFO (optional future use) -->
        <div class="info-note text-center small text-muted">
            Attraction information
        </div>

    </div>

</div>

@endsection