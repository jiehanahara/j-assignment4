@extends("master")

@section('content')

<div class="container mt-5">

    <!-- Title -->
    <h1 class="text-center fw-bold mb-4 title">Destination</h1>

    <!-- Card -->
    <div class="card border-0 shadow-lg rounded-4 p-3 custom-card">
        <div class="card-body">

            <table class="table align-middle mb-0 custom-table">
                <tbody> 
                    <tr>
                        <th>Destination</th>
                        <td class="text-end fw-semibold text-primary">Bali</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td class="text-end">Rp 500.000</td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td class="text-end">Denpasar, Bali</td>
                    </tr>
                    <tr>
                        <th>Duration</th>
                        <td class="text-end">4 days, 3 nights</td>
                    </tr>
                    <tr>
                        <th>Transportation</th>
                        <td class="text-end">✈️ Plane</td>
                    </tr>
                    <tr>
                        <th>Hotel</th>
                        <td class="text-end">⭐⭐⭐⭐</td>
                    </tr>
                    <tr>
                        <th>Rating</th>
                        <td class="text-end text-warning fw-bold">★ 4.8</td>
                    </tr>
                    <tr>
                        <th>Facilities</th>
                        <td class="text-end">
                            <span class="badge bg-success">Hotel</span>
                            <span class="badge bg-success">Breakfast</span>
                            <span class="badge bg-success">Guide</span>
                            <span class="badge bg-success">Transport</span>
                        </td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<style>
/* Title font */
.title {
    font-family: 'Playfair Display', serif;
    letter-spacing: 1px;
}

/* Card styling */
.custom-card {
    background: #ffffff;
}

/* Table styling */
.custom-table th {
    color: #555;
    font-weight: 600;
    width: 40%;
}

.custom-table td {
    color: #222;
}

/* Remove ugly table lines */
.table > :not(caption) > * > * {
    border-bottom: 1px solid #f0f0f0;
}

/* Hover effect */
.custom-table tr:hover {
    background-color: #f9f9f9;
}
</style>


@endsection