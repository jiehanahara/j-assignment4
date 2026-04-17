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
                ✏️ Edit Review
            </h3>

            <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-floating mb-3">
                    <select class="form-select @error('attraction_id') is-invalid @enderror" name="attraction_id" required>
                        <option value="">Select Attraction</option>
                        @foreach($attractions as $attraction)
                            <option value="{{ $attraction->id }}" {{ $review->attraction_id == $attraction->id ? 'selected' : '' }}>
                                {{ $attraction->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="attraction_id" class="form-label">Attraction</label>
                    <div class="invalid-feedback">
                        @error('attraction_id')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <!-- Name -->
                
                <div class="form-floating mb-3">
                    <select class="form-select @error('user_id') is-invalid @enderror" name="user_id" required>
                        <option value="">Select User</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $review->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="user_id" class="form-label">User</label>
                    <div class="invalid-feedback">
                        @error('user_id')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <input type="number" class="form-control @error('rating') is-invalid @enderror" name="rating" value="{{ $review->rating }}" min="1" max="5" required>
                    <label for="rating" class="form-label">Rating</label>
                    <div class="invalid-feedback">
                        @error('rating')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <!-- Description -->
                <div class="form-floating mb-3">
                    <textarea class="form-control" name="comment"
                              style="height: 140px"
                              placeholder="comment">{{ $review->comment }}</textarea>
                    <label for="comment" class="form-label">Comment</label>
            
                </div>

                <!-- BUTTONS -->
                <div class="d-flex justify-content-between mt-4">

                    <a href="{{ route('reviews.index') }}" class="btn attraction-btn-cancel">
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