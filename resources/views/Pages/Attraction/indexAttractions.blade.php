@extends('master')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">

        <div>
            <h2 class="fw-bold mb-0">Attractions</h2>
            <small class="text-muted">Manage your attractions</small>
        </div>

        <!-- SEARCH -->
       <form method="GET">
    <div class="attraction-search">
        <span class="search-icon">🔍</span>
        <input 
            type="text" 
            name="search" 
            placeholder="Search attractions..." 
            value="{{ request('search') }}"
        >
    </div>
</form>
    </div>

    <!-- ADD BUTTON -->
    <a href="/attractions/create" class="btn attraction-btn-add mb-4">
        + Add Attraction
    </a>

    <!-- TABLE -->
    <div class="table-responsive">
        <table class="table attraction-table align-middle">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Attraction</th>
                    <th>Description</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($attractions as $attraction)
                <tr class="attraction-row">

                    <td>#{{ $attraction->id }}</td>

                    <td class="attraction-name">
                        {{ $attraction->name }}
                    </td>

                    <td class="attraction-desc">
                        {{ Str::limit($attraction->description, 60) }}
                    </td>

                    <td class="text-end">
                        <div class="d-flex gap-2 justify-content-end flex-wrap">

                            <a href="/attractions/{{ $attraction->id }}/edit" 
                               class="btn attraction-btn-edit btn-sm">
                                Edit
                            </a>

                            <a href="{{ route('attractions.show', $attraction->id) }}" 
                               class="btn attraction-btn-view btn-sm">
                                View
                            </a>

                            <form action="/attractions/{{ $attraction->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn attraction-btn-delete btn-sm"
                                    onclick="return confirm('Delete this attraction?')">
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

    <!-- PAGINATION -->
    <div class="mt-4 text-center">

        <div class="d-flex justify-content-center">
            {{ $attractions->links('pagination::bootstrap-5') }}
        </div>

        <div class="pagination-info mt-2 small text-muted">
            Showing {{ $attractions->firstItem() }} 
            to {{ $attractions->lastItem() }} 
            of {{ $attractions->total() }} attractions
        </div>

    </div>

</div>

@endsection