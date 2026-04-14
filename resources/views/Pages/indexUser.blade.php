@extends('master')

@section('content')

<div class="container mt-4">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="fw-bold mb-0">Users</h2>
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
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $u)
                <tr class="user-row">

                    <td>#{{ $u->id }}</td>

                    <td>
                        <div class="fw-semibold">{{ $u->name }}</div>
                        <small class="text-muted">User Account</small>
                    </td>

                    <td>{{ $u->email }}</td>

                    <td class="text-muted small">
                        {{ Str::limit($u->password, 20) }}
                    </td>

                    <td class="text-end">
                        <div class="d-flex gap-2 justify-content-end">

                            <a href="/User/{{ $u->id }}/edit" class="btn user-btn-edit btn-sm">
                                Edit
                            </a>

                            <form action="/User/{{ $u->id }}" method="POST">
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

</div>

@endsection