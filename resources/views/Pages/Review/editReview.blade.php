@extends('master')

@section('content')

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">

    <div class="form-card p-4" style="max-width: 600px; width: 100%;">

        <h3 class="fw-bold mb-4 text-center">
            ✏️ Edit Review
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

        <form action="{{ route('reviews.update', $review->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- ATTRACTION -->
            <div class="form-floating mb-3">
                <select class="form-select custom-input @error('attraction_id') is-invalid @enderror" 
                        name="attraction_id" required>
                    <option value="">Select Attraction</option>
                    @foreach($attractions as $attraction)
                        <option value="{{ $attraction->id }}" 
                            {{ $review->attraction_id == $attraction->id ? 'selected' : '' }}>
                            {{ $attraction->name }}
                        </option>
                    @endforeach
                </select>
                <label>Attraction</label>
            </div>

            <!-- USER -->
            <div class="form-floating mb-3">
                <select class="form-select custom-input @error('user_id') is-invalid @enderror" 
                        name="user_id" required>
                    <option value="">Select User</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" 
                            {{ $review->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
                <label>User</label>
            </div>

            <!-- RATING -->
            <div class="form-floating mb-3">
                <input type="number" 
                       class="form-control custom-input @error('rating') is-invalid @enderror" 
                       name="rating" 
                       value="{{ $review->rating }}" 
                       min="1" max="5">
                <label>Rating (1–5)</label>
            </div>

            <!-- COMMENT -->
            <div class="form-floating mb-4">
                <textarea 
                    class="form-control custom-input" 
                    name="comment"
                    style="height: 140px"
                    placeholder="Comment">{{ $review->comment }}</textarea>
                <label>Comment</label>
            </div>

            <!-- BUTTONS -->
            <div class="d-flex justify-content-between align-items-center">

                <a href="{{ route('reviews.index') }}" class="btn btn-cancel">
                    ← Cancel
                </a>

                <button type="submit" class="btn btn-main px-4">
                    Update →
                </button>

            </div>

        </form>

    </div>

</div>

@endsection