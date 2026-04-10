<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    /* Table base */
.custom-table {
    border-collapse: separate;
    border-spacing: 0 10px;
}

/* Remove default borders */
.custom-table th,
.custom-table td {
    border: none;
}

/* Header */
.custom-table thead th {
    font-size: 0.8rem;
    text-transform: uppercase;
    color: #888;
    padding-bottom: 10px;
}

/* Row = card style */
.table-row {
    background: white;
    box-shadow: 0 4px 15px rgba(22, 44, 36, 0.082);
    border-radius: 12px;
    transition: 0.2s;
    padding-bottom: 10px;

}

/* Rounded rows */
.table-row td:first-child {
    border-top-left-radius: 12px;
    border-bottom-left-radius: 12px;
}

.table-row td:last-child {
    border-top-right-radius: 12px;
    border-bottom-right-radius: 12px;
}

/* Hover */
.table-row:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

/* ID */
.id-link {
    text-decoration: none;
    font-weight: 600;
    color: #486454;
}

/* Add button */
.btn-add {
    background-color: #6f9f8d;
    color: white;
    border-radius: 50px;
    padding: 8px 18px;
    transition: 0.2s;
}

.btn-add:hover {
    background-color: #5a8776;
}

/* Delete button */
.btn-delete {
    background-color: #dc3545;
    color: white;
    border: none;
    border-radius: 20px;
    padding: 5px 12px;
    display: inline-block;
}

.btn-delete:hover {
    background-color: #bb2d3b;
}

.btn-edit {
    background-color: #e8f3ef;   /* light green background */
    color: #486454;
    border: 1px solid #6f9f8d;
    border-radius: 20px;
    padding: 5px 12px;
    display: inline-block;
}

.btn-edit:hover {
    background-color: #6f9f8d;
    color: white;
}


</style>

</head>
<body>
    @extends("master")

@section("content")

<div class="container mt-5">

    <!-- Title -->
    <div class="mb-4">
        <h2 class="fw-bold">Destinations</h2>
        <p class="text-muted small">Explore and manage your travel destinations</p>
    </div>

    <!-- Add Button -->
    <div class="mb-3">
        <a href="/destination/create" class="btn btn-add">+ Add Destination</a>
    </div>

    <!-- Table -->
    <div class="table-responsive">

        <table class="table custom-table align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Destination</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>
                @foreach ($destinations as $d)
                <tr class="table-row">

                    <td>
                        <a href="/asiaheritage/{{ $d->id}}" class="id-link">
                            #{{ $d->id}}
                        </a>
                    </td>

                    <td>
                        <div class="fw-semibold">{{ $d->name }}</div>
                        <div class="text-muted small">📍 {{ $d->location }}</div>
                    </td>

                    <td class="text-muted small">
                        {{ Str::limit($d->description, 70) }}
                    </td>

                    <td class="fw-semibold text-success">
                        Rp {{ number_format($d->ticket_price) }}
                    </td>

                    <td class="text-end">
    <div class="d-flex gap-2 justify-content-end">

        <a href="/destinations/{{ $d->id }}/edit" class="btn btn-edit btn-sm">
            Edit
        </a>

        <form action="/destination/{{ $d->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-delete btn-sm">
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
</body>
</html>