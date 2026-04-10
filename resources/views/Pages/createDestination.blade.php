<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body>
    @extends("master")

@section("content")

<div class="container mt-5 d-flex justify-content-center">

    <div class="card form-card shadow-lg p-4">

        <h3 class="fw-bold mb-4 text-center">Add Destination</h3>

        <form action="/destinations" method="post">
        @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Asia Heritage" name="name">
            <label>Destination Name</label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" placeholder="Description" style="height: 120px"></textarea>
            <label>Description</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Pekanbaru" name="location">
            <label>Location</label>
        </div>

        <div class="form-floating mb-3">
            <input type="number" class="form-control" placeholder="100000" name="ticket_price">
            <label>Ticket Price</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="08.00 - 17.00" name="working_hours">
            <label>Working Hours</label>
        </div>

        <div class="form-floating mb-4">
            <input type="text" class="form-control" placeholder="Monday - Sunday" name="working_days">
            <label>Working Days</label>
        </div>

        <button type="submit" class="btn btn-submit w-100">
            Add Destination
        </button>

        </form>

    </div>

</div>

@endsection
</body>
</html>