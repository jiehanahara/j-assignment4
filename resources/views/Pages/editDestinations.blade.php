@extends('master')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="card form-card shadow-lg p-4">

        <h3 class="fw-bold mb-4 text-center">Add Destination</h3>

        <form action="/destinations/{{ $destination->id }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Asia Heritage" name="name" value="{{ $destination->name }}">
            <label>Destination Name</label>
        </div>

        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" placeholder="Description" style="height: 120px">{{ $destination->description }}</textarea>
            <label>Description</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="Pekanbaru" name="location" value="{{ $destination->location }}">
            <label>Location</label>
        </div>

        <div class="form-floating mb-3">
            <input type="number" class="form-control" placeholder="100000" name="ticket_price" value="{{ $destination->ticket_price }}">
            <label>Ticket Price</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" placeholder="08.00 - 17.00" name="working_hours" value="{{ $destination->working_hours }}">
            <label>Working Hours</label>
        </div>

        <div class="form-floating mb-4">
            <input type="text" class="form-control" placeholder="Monday - Sunday" name="working_days" value="{{ $destination->working_days }}">
            <label>Working Days</label>
        </div>

        <button type="submit" class="btn btn-submit w-100">
            Update Destination
        </button>

        </form>

    </div>

</div>

@endsection