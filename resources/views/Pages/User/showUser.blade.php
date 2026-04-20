@extends('master')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="card user-detail-card shadow-lg border-0 p-5 rounded-4 text-center" 
         style="max-width: 500px; width: 100%;">

        <!-- Title -->
        <h2 class="fw-bold mb-4">
            👤 User Details
        </h2>

        <!-- Avatar -->
        <div class="d-flex justify-content-center mb-4">
            <div class="avatar-circle-lg">
                {{ strtoupper(substr($user->name, 0, 1)) }}
            </div>
        </div>

        <!-- Name -->
        <div class="mb-3">
            <small class="text-muted">Name</small>
            <div class="fw-semibold fs-5">{{ $user->name }}</div>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <small class="text-muted">Email</small>
            <div>{{ $user->email }}</div>
        </div>

        <!-- Password -->
        <div class="mb-4">
            <small class="text-muted">Password</small>
            <div class="text-muted small">
                ••••••••••••••••
            </div>
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between mt-4">

            <a href="/User" class="btn btn-cancel px-4">
                ← Back
            </a>

            <a href="/User/{{ $user->id }}/edit" class="btn btn-main px-4">
                Edit
            </a>

        </div>

    </div>

</div>

@endsection