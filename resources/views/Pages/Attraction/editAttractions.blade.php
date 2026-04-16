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

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="col-lg-7 col-md-9">

        <div class="card shadow-lg border-0 p-4 rounded-4 attraction-form-card">

            <h3 class="fw-bold mb-4 text-center">
                ✏️ Edit Attraction
            </h3>

            <form action="{{ route('attractions.update', $attraction->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-floating mb-3">
                    <select class="form-select @error('destinations_id') is-invalid @enderror" name="destinations_id" required>
                        <option value="">Select Destination</option>
                        @foreach($destinations as $destination)
                            <option value="{{ $destination->id }}" {{ $attraction->destinations_id == $destination->id ? 'selected' : '' }}>
                                {{ $destination->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="destinations_id" class="form-label">Destination</label>
                    <div class="invalid-feedback">
                        @error('destinations_id')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <!-- Name -->
                <div class="form-floating mb-3">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                           value="{{ $attraction->name }}" placeholder="Name">
                    <label for="name" class="form-label">Name</label>
                    <div class="invalid-feedback">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="form-floating mb-3">
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description"
                              style="height: 140px"
                              placeholder="Description">{{ $attraction->description }}</textarea>
                    <label for="description" class="form-label">Description</label>
                    <div class="invalid-feedback">
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
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