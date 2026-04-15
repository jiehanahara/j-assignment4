@extends('master')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="card shadow-lg border-0 p-4 rounded-4 user-detail-card">

        <!-- Title -->
        <h2 class="fw-bold mb-4 text-center">User Details</h2>

        <!-- Info -->
        <div class="mb-3">
            <small class="text-muted">Name</small>
            <div class="fw-semibold fs-5">{{ $user->name }}</div>
        </div>

        <div class="mb-3">
            <small class="text-muted">Email</small>
            <div>{{ $user->email }}</div>
        </div>

        <div class="mb-4">
            <small class="text-muted">Password</small>
            <div class="text-muted small">
                {{ Str::limit($user->password, 25) }}
            </div>
        </div>

        <!-- Buttons -->
        <div class="d-flex justify-content-between">

            <a href="/User" class="btn btn-cancel">
                ← Back
            </a>

            <a href="/User/{{ $user->id }}/edit" class="btn btn-edit">
                Edit User
            </a>

        </div>

    </div>

</div>

@endsection