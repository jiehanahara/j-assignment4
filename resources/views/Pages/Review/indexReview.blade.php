@extends('master')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

        <div>
            <h2 class="fw-bold mb-0">⭐ Reviews</h2>
            <small class="text-muted">Manage your reviews</small>
        </div>

        <!-- SEARCH -->
        <form method="GET">
            <div class="search-box">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search reviews..." 
                    value="{{ request('search') }}"
                >
                <button type="submit">🔍</button>
            </div>
        </form>

    </div>

    <!-- ADD BUTTON -->
    <a href="{{ route('reviews.create') }}" class="btn btn-main mb-4">
        + Add Review
    </a>

    <!-- TABLE -->
    <div class="table-responsive custom-table-wrapper">

        <table class="table custom-table align-middle">

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
                <tr class="table-row">

                    <td class="id-link">#{{ $review->id }}</td>

                    <td class="fw-semibold">
                        {{ $review->attraction->name ?? '—' }}
                    </td>

                    <td>
                        {{ $review->user->name ?? '—' }}
                    </td>

                    <td>
                        <span class="rating-badge">
                            ⭐ {{ $review->rating }}
                        </span>
                    </td>

                    <td class="text-muted small">
                        {{ Str::limit($review->comment ?? 'No comment provided', 60) }}
                    </td>

                    <td class="text-end">
                        <div class="d-flex gap-2 justify-content-end flex-wrap">

                            <a href="{{ route('reviews.edit', $review->id) }}" 
                               class="btn btn-edit btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-delete btn-sm"
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

@endsection