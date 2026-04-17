@extends('master')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">

        <div>
            <h2 class="fw-bold mb-0">Reviews</h2>
            <small class="text-muted">Manage your reviews</small>
        </div>

        <!-- SEARCH -->
        <form method="GET">
            <div class="attraction-search">
                <span class="search-icon">🔍</span>
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search reviews..." 
                    value="{{ request('search') }}"
                >
            </div>
        </form>

    </div>

    <!-- ADD BUTTON -->
    <div class="mb-3">
        <a href="{{ route('reviews.create') }}" class="btn attraction-btn-add">
            + Add Review
        </a>
    </div>

    <!-- TABLE CARD -->
    <div class="card shadow-lg border-0 p-4 rounded-4">

        <div class="table-responsive">

            <table class="table align-middle review-table">

                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Attraction</th>
                        <th>User</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($reviews as $review)
                    <tr class="review-row">

                        <td>#{{ $review->id }}</td>

                        <td class="fw-semibold">
                            {{ $review->attraction->name ?? '—' }}
                        </td>

                        <td>
                            {{ $review->user->name ?? '—' }}
                        </td>

                        <td class="text-success fw-semibold">
                            ⭐ {{ $review->rating }}
                        </td>

                        <td class="text-muted small">
                            {{ Str::limit($review->comment ?? 'No comment provided', 60) }}
                        </td>
                     

                        <td class="text-end">
                            <div class="d-flex gap-2 justify-content-end">

                                <a href="{{ route('reviews.edit', $review->id) }}" 
                                   class="btn attraction-btn-edit btn-sm">
                                    Edit
                                </a>

                                <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn attraction-btn-delete btn-sm"
                                        onclick="return confirm('Delete this review?')">
                                        Delete
                                    </button>
                                </form>

                            </div>
                        </td>

                    </tr>
                    @endforeach
                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection