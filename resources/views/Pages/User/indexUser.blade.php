@extends('master')

@section('content')

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

<div class="container mt-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold mb-0">User Management</h2>
            <small class="text-muted">Manage your users</small>
        </div>

        <!-- SEARCH -->
        <form method="GET">
            <div class="search-box">
                <input type="text" name="search" placeholder="Search..." value="{{ request('search') }}">
                <button>🔍</button>
            </div>
        </form>

    </div>

    <!-- ADD BUTTON -->
    <a href="/User/create" class="btn user-btn-create mb-3">+ Add User</a>

    <!-- TABLE -->
    <div class="table-responsive">
        <table class="table user-table align-middle">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Email</th>
                    <th class="text-end">Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $u)
                <tr class="user-row">

                    <td class="text-muted fw-semibold">#{{ $u->id }}</td>

                    <td>
                        <div class="fw-semibold">{{ $u->name }}</div>
                        <small class="text-muted">User Account</small>
                    </td>

                    <td class="text-muted">{{ $u->email }}</td>

                    <td class="text-end">
                        <div class="d-flex justify-content-end gap-2 flex-wrap">

                            <a href="{{ route('User.show', $u->id) }}" class="btn user-btn-view btn-sm">
                                View
                            </a>

                            <a href="{{ route('User.edit', $u->id) }}" class="btn user-btn-edit btn-sm">
                                Edit
                            </a>

                            <form action="{{ route('User.destroy', $u->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn user-btn-delete btn-sm"
                                    onclick="return confirm('Delete this user?')">
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
            {{ $users->links('pagination::bootstrap-5') }}
        </div>

        <div class="pagination-info mt-2 small text-muted">
            Showing {{ $users->firstItem() }} 
            to {{ $users->lastItem() }} 
            of {{ $users->total() }} users
        </div>

    </div>

</div>

@endsection