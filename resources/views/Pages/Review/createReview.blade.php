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
                ➕ Add Review
            </h3>

            <form action="{{ route('reviews.store') }}" method="POST">
                @csrf

                <!-- Attraction -->
                <div class="form-floating mb-3">
    <select class="form-select @error('attraction_id') is-invalid @enderror" 
            name="attraction_id" required>

        <option value="">Select Attraction</option>

        @foreach($attractions as $attraction)
            <option value="{{ $attraction->id }}" 
                {{ old('attraction_id') == $attraction->id ? 'selected' : '' }}>
                {{ $attraction->name }}
            </option>
        @endforeach

    </select>

    <label>Attraction</label>

    @error('attraction_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

                <!-- Name -->
               <div class="form-floating mb-3">
    <select class="form-select @error('user_id') is-invalid @enderror" 
            name="user_id" required>

        <option value="">Select User</option>

        @foreach($users as $user)
            <option value="{{ $user->id }}" 
                {{ old('user_id') == $user->id ? 'selected' : '' }}>
                {{ $user->name }}
            </option>
        @endforeach

    </select>

    <label>User</label>

    @error('user_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

                
                 <!-- Rating -->
                 <div class="form-floating mb-3">
                    <input type="number" 
                           class="form-control @error('rating') is-invalid @enderror"
                           name="rating"
                           value="{{ old('rating') }}"
                           placeholder="Rating" required min="1" max="5">

                    <label>Rating (1-5)</label>

                    @error('rating')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>


                <!-- Description -->
                <div class="form-floating mb-3">
                    <textarea 
                        class="form-control"
                        name="comment"
                        style="height: 140px"
                        placeholder="Comment">{{ old('comment') }}</textarea>

                    <label>Comment</label>
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between mt-4">

                    <a href="{{ route('reviews.index') }}" class="btn attraction-btn-cancel">
                        ← Cancel
                    </a>

                    <button type="submit" class="btn attraction-btn-submit">
                        + Add Review
                    </button>

                </div>

            </form>

        </div>

    </div>

</div>


@endsection