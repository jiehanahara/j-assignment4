 @extends("master")

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* Form card */
.form-card {
    width: 100%;
    max-width: 500px;
    border-radius: 20px;
    background: rgb(214, 235, 224);
}

/* Button style (match your theme) */
.btn-submit {
    background-color: #6f9f8d;
    color: white;
    border-radius: 50px;
    padding: 10px;
    font-weight: 600;
    transition: 0.3s;
}

.btn-submit:hover {
    background-color: #578372;
}

/* Input focus glow */
.form-control:focus {
    border-color: #6f9f8d;
    box-shadow: 0 0 0 0.2rem rgba(111, 159, 142, 0.582);
}
    </style>
   
@section("content")

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<div class="container mt-5 d-flex justify-content-center">

    <div class="card form-card shadow-lg p-4">

        <h3 class="fw-bold mb-4 text-center">Add Destination</h3>

        <form action="/destinations" method="POST">
        @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Asia Heritage" name="name">
            <label>Destination Name</label>
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" placeholder="Description" style="height: 120px"></textarea>
            <label>Description</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('location') is-invalid @enderror" placeholder="Pekanbaru" name="location">
            <label>Location</label>
            @error('location')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="number" class="form-control @error('ticket_price') is-invalid @enderror" placeholder="100000" name="ticket_price">
            <label>Ticket Price</label>
            @error('ticket_price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control @error('working_hours') is-invalid @enderror" placeholder="08.00 - 17.00" name="working_hours">
            <label>Working Hours</label>
            @error('working_hours')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-floating mb-4">
            <input type="text" class="form-control @error('working_days') is-invalid @enderror" placeholder="Monday - Sunday" name="working_days">
            <label>Working Days</label>
            @error('working_days')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

       <a href="/destinations" class="btn btn-cancel">
    Cancel
</a>
    <button type="submit" class="btn user-btn-create w-50">
        + Add Destination
    </button>
        </form>

    </div>

</div>
@endsection
