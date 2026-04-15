@extends('master')

@section('content')

<div class="container mt-4">

    {{-- ALERT --}}
    @if (session('success'))
    <div class="custom-alert mb-3" id="successAlert">
        {{ session('success') }}
    </div>
    @endif

    <script>
    setTimeout(() => {
        let alert = document.getElementById('successAlert');
        if (alert) {
            alert.style.opacity = "0";
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000);
    </script>

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">

        <div>
            <h2 class="fw-bold mb-0">Destinations</h2>
            <small class="text-muted">Manage and explore places</small>
        </div>

        <!-- SEARCH -->
        <form method="GET">
            <div class="search-box">
                <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                <button type="submit">🔍</button>
            </div>
        </form>

    </div>

    <!-- ADD BUTTON -->
    <a href="/destination/create" class="btn btn-add mb-4">+ Add Destination</a>

    <!-- TABLE -->
    <div class="table-responsive">
        <table class="table custom-table align-middle">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destination</th>
                    <th>Price</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($destinations as $d)
                <tr class="table-row">

                    <td>
                        <a href="/asiaheritage/{{ $d->id }}" class="id-link">
                            #{{ $d->id }}
                        </a>
                    </td>

                    <td>
                        <div class="fw-semibold">{{ $d->name }}</div>
                        <small class="text-muted">📍 {{ $d->location }}</small>
                    </td>

                    <td class="text-success fw-semibold">
                        Rp {{ number_format($d->ticket_price) }}
                    </td>

                    <td class="text-end">
                        <div class="d-flex gap-2 justify-content-end flex-wrap">

                            <a href="/destinations/{{ $d->id }}/edit" 
                               class="btn btn-edit btn-sm">
                                Edit
                            </a>

                            <form action="/destination/{{ $d->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-delete btn-sm"
                                    onclick="return confirm('Delete this destination?')">
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
            {{ $destinations->links('pagination::bootstrap-5') }}
        </div>

        <div class="pagination-info mt-2 small text-muted">
            Showing {{ $destinations->firstItem() }} 
            to {{ $destinations->lastItem() }} 
            of {{ $destinations->total() }} results
        </div>

    </div>

</div>

@endsection