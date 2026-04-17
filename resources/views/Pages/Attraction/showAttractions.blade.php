@extends('master')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="card shadow-lg border-0 p-4 rounded-4 user-detail-card">

        <!-- Title -->
        <h2 class="fw-bold mb-4 text-center">Attraction Details</h2>

        <div class="mb-3">
            <small class="text-muted">Destination</small>
            <div class="fw-semibold fs-5">{{ $attraction->destination->name ?? 'No destination' }}</div>
        </div>

        <!-- Info -->
        <div class="mb-3">
            <small class="text-muted">Name</small>
            <div>{{ $attraction->name }}</div>
        </div>
        <div class="mb-3">
            <small class="text-muted">Description</small>
            <div>{{ $attraction->description }}</div>
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between">

            <a href="/attractions" class="btn btn-cancel">
                ← Back
            </a>

            <a href="/attractions/{{ $attraction->id }}/edit" class="btn btn-edit">
                Edit Attraction
            </a>

        </div>

    </div>

</div>

@endsection