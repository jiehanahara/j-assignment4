@extends('master')

@section('content')

<form action="/User" method="post" class="form floating">
@csrf
<div class="container mt-5 d-flex justify-content-center">

    <div class="card form-card shadow-lg p-4 border-0">

        <h3 class="fw-bold mb-4 text-center text-success">
            ➕ Add User
        </h3>

        <!-- Name -->
        <div class="form-floating mb-3">
            <input type="text" class="form-control custom-input" name="name"
                   placeholder="Jiehan Ashara">
            <label>Name</label>
        </div>

        <!-- Email -->
        <div class="form-floating mb-3">
            <input type="email" class="form-control custom-input" name="email"
                   placeholder="jiehan@example.com">
            <label>Email</label>
        </div>

        <!-- Password -->
        <div class="form-floating mb-3">
            <input type="password" class="form-control custom-input" name="password"
                   placeholder="••••••••">
            <label>Password</label>
        </div>

       <div class="d-flex justify-content-between mt-4">

    <a href="/User" class="btn btn-cancel">
    Cancel
</a>
    <button type="submit" class="btn user-btn-create w-50">
        + Add User
    </button>

</div>
    </div>
</div>

</form>

@endsection