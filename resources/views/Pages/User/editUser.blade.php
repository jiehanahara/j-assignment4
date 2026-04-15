@extends('master')
@section('content')

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
            <input type="text" class="form-control custom-input" name="name"
                   value="{{ $user->name }}" placeholder="Jiehan Ashara">
            <label>Name</label>
        </div>

        <!-- Email -->
        <div class="form-floating mb-3">
            <input type="email" class="form-control custom-input" name="email"
                   value="{{ $user->email }}" placeholder="jiehan@example.com">
            <label>Email</label>
        </div>

        <!-- Password -->
        <div class="form-floating mb-3">
            <input type="password" class="form-control custom-input" name="password" placeholder="Password">
            <label>Password</label>
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