@extends('master')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="col-lg-7 col-md-9">

        <div class="card shadow-lg border-0 p-4 rounded-4 attraction-form-card">

            <h3 class="fw-bold mb-4 text-center">
                ✏️ Edit Attraction
            </h3>

            <form action="{{ route('attractions.update', $attraction->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Name -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="name"
                           value="{{ $attraction->name }}" placeholder="Name">
                    <label>Name</label>
                </div>

                <!-- Description -->
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="description"
                              style="height: 140px"
                              placeholder="Description">{{ $attraction->description }}</textarea>
                    <label>Description</label>
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between mt-4">

                    <a href="/attractions" class="btn attraction-btn-cancel">
                        ← Cancel
                    </a>

                    <button type="submit" class="btn attraction-btn-submit">
                        Update Attraction
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection