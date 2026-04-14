@extends('master')

@section('content')

@if (session('success'))
<div class="custom-alert mb-3">
    {{ session('success') }}
</div>
@endif
<script>
    setTimeout(function () {
        let alert = document.getElementById('successAlert');
        if (alert) {
            alert.classList.remove('show');
            alert.classList.add('fade');

            // completely remove after animation
            setTimeout(() => alert.remove(), 500);
        }
    }, 3000); // 3 seconds
</script>
<div class="d-flex justify-content-between align-items-center mb-4">

    <div>
        <h2 class="fw-bold mb-0">Destinations</h2>
        <small class="text-muted">Manage and explore places</small>
    </div>

    <!-- SEARCH -->
    <form method="GET">
        <div class="search-box">
            <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
            <button>🔍</button>
        </div>
    </form>

</div>

<a href="/destination/create" class="btn btn-add mb-3">+ Add Destination</a>

<table class="table custom-table">

    <thead>
        <tr>
            <th>ID</th>
            <th>Destination</th>
            <th>Price</th>
            <th></th>
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
                <div class="d-flex gap-2 justify-content-end">

                    <a href="/destinations/{{ $d->id }}/edit" class="btn btn-edit btn-sm">
                        Edit
                    </a>

                    <form action="/destination/{{ $d->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-delete btn-sm" onclick="return confirm('Are you sure you want to delete this destination?')">
                            Delete
                        </button>
                    </form>

                </div>
            </td>

        </tr>
        @endforeach
    </tbody>

</table>
<div class="mt-3 text-center">

    {{-- Pagination buttons --}}
    <div class="d-flex justify-content-center">
        {{ $destinations->links('pagination::bootstrap-5') }}
    </div>

    {{-- Result text --}}
    <div class="pagination-info mt-2">
        Showing {{ $destinations->firstItem() }} 
        to {{ $destinations->lastItem() }} 
        of {{ $destinations->total() }} results
    </div>

</div>
@endsection