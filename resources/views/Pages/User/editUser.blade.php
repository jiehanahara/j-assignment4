@extends('master')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
<form action="/User/{{ $user->id }}" method="POST">
    @csrf
    @method('PUT')
<div class="container mt-5 d-flex justify-content-center">
    
    <div class="card form-card shadow-lg p-4 border-0">

        <h3 class="fw-bold mb-4 text-center text-success">
            ✏️ Edit User
        </h3>

        <!-- Name -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control custom-input @error('name') is-invalid @enderror" name="name"
                   value="{{ $user->name }}" placeholder="Jiehan Ashara">
            <label>Name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Email -->
        <div class="form-floating mb-3">
            <input type="email" class="form-control custom-input @error('email') is-invalid @enderror" name="email"
                   value="{{ $user->email }}" placeholder="jiehan@example.com">
            <label>Email</label>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <!-- Password -->
        <div class="form-floating mb-3">
            <input type="password" class="form-control custom-input @error('password') is-invalid @enderror" name="password" placeholder="Password">
            <label>Password</label>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
<div class="d-flex justify-content-between mt-4">

    <a href="/User" class="btn btn-cancel">
    Cancel
</a>

    <button type="submit" class="btn user-btn-edit">
        Update User
    </button>

</div>
    </div>
</div>

</form>

@endsection