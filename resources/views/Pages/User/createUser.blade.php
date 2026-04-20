@extends('master')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="form-card p-4" style="max-width: 500px; width: 100%;">

        <h3 class="fw-bold mb-4 text-center">
            ➕ Add User
        </h3>

        {{-- ERROR --}}
        @if ($errors->any())
            <div class="custom-alert mb-3">
                <ul class="mb-0 small">
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/User" method="POST">
            @csrf

            <!-- NAME -->
            <div class="form-floating mb-3">
                <input type="text" 
                       class="form-control custom-input @error('name') is-invalid @enderror" 
                       name="name"
                       value="{{ old('name') }}"
                       placeholder="Name">
                <label>Name</label>
            </div>

            <!-- EMAIL -->
            <div class="form-floating mb-3">
                <input type="email" 
                       class="form-control custom-input @error('email') is-invalid @enderror" 
                       name="email"
                       value="{{ old('email') }}"
                       placeholder="Email">
                <label>Email</label>
            </div>

            <!-- PASSWORD -->
            <div class="form-floating mb-4">
                <input type="password" 
                       class="form-control custom-input @error('password') is-invalid @enderror" 
                       name="password"
                       placeholder="Password">
                <label>Password</label>
            </div>

            <!-- BUTTONS -->
            <div class="d-flex justify-content-between align-items-center">

                <a href="/User" class="btn btn-cancel">
                    Cancel
                </a>

                <button type="submit" class="btn btn-main px-4">
                    Add →
                </button>

            </div>

        </form>

    </div>

</div>

@endsection