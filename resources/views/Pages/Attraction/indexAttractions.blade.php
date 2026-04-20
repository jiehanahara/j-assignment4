@extends('master')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

        <div>
            <h2 class="fw-bold mb-0">🎡 Attractions</h2>
            <small class="text-muted">Manage your attractions</small>
        </div>

        <!-- SEARCH -->
        <form method="GET">
            <div class="search-box">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search attractions..." 
                    value="{{ request('search') }}"
                >
                <button type="submit">🔍</button>
            </div>
        </form>

    </div>

    <!-- ADD BUTTON -->
    <a href="/attractions/create" class="btn btn-main mb-4">
        + Add Attraction
    </a>

    <!-- TABLE -->
    <div class="table-responsive custom-table-wrapper">
        <table class="table custom-table align-middle">

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
                <tr class="table-row">

                    <td class="id-link">
                        #{{ $attraction->id }}
                    </td>

                    <td>
                        <div class="fw-semibold">{{ $attraction->name }}</div>
                    </td>

                    <td class="text-muted small">
                        {{ Str::limit($attraction->description, 60) }}
                    </td>

                    <td class="text-end">
                        <div class="d-flex gap-2 justify-content-end flex-wrap">

                            <a href="/attractions/{{ $attraction->id }}/edit" 
                               class="btn btn-edit btn-sm">
                                Edit
                            </a>

                            <a href="{{ route('attractions.show', $attraction->id) }}" 
                               class="btn btn-main btn-sm">
                                View
                            </a>

                            <form action="/attractions/{{ $attraction->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-delete btn-sm"
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
<div class="mt-4">

    <div class="d-flex justify-content-center">
       {{ $attractions->links('pagination::bootstrap-5') }}
    </div>

    <div class="pagination-info text-center mt-2">
        Showing {{ $attractions->firstItem() }} 
        to {{ $attractions->lastItem() }} 
        of {{ $attractions->total() }} attractions
    </div>

</div>

</div>

@endsection