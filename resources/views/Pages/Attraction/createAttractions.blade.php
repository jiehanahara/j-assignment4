@extends('master')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
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
                ➕ Add Attraction
            </h3>

            <form action="{{ route('attractions.store') }}" method="POST">
                @csrf

                <!-- Destination -->
                <div class="form-floating mb-3">
                    <select class="form-select @error('destinations_id') is-invalid @enderror" 
                            name="destinations_id" required>
                        <option value="">Select Destination</option>
                        @foreach($destinations as $destination)
                            <option value="{{ $destination->id }}" 
                                {{ old('destinations_id') == $destination->id ? 'selected' : '' }}>
                                {{ $destination->name }}
                            </option>
                        @endforeach
                    </select>
                    <label>Destination</label>

                    @error('destinations_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Name -->
                <div class="form-floating mb-3">
                    <input type="text" 
                           class="form-control @error('name') is-invalid @enderror"
                           name="name"
                           value="{{ old('name') }}"
                           placeholder="Name" required>

                    <label>Name</label>

                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Description -->
                <div class="form-floating mb-3">
                    <textarea 
                        class="form-control @error('description') is-invalid @enderror"
                        name="description"
                        style="height: 140px"
                        placeholder="Description">{{ old('description') }}</textarea>

                    <label>Description</label>

                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between mt-4">

                    <a href="/attractions" class="btn attraction-btn-cancel">
                        ← Cancel
                    </a>

                    <button type="submit" class="btn attraction-btn-submit">
                        + Add Attraction
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection