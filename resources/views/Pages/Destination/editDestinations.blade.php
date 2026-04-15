@extends('master')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="card form-card shadow-lg p-4 border-0">

        <h3 class="fw-bold mb-4 text-center text-success">
            ✏️ Edit Destination
        </h3>

        <form action="/destinations/{{ $destination->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input" name="name"
                       value="{{ $destination->name }}" placeholder="Asia Heritage">
                <label>Destination Name</label>
            </div>

            <!-- Description -->
            <div class="form-floating mb-3">
                <textarea name="description" class="form-control custom-input"
                          placeholder="Description" style="height: 120px">{{ $destination->description }}</textarea>
                <label>Description</label>
            </div>

            <!-- Location -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input" name="location"
                       value="{{ $destination->location }}" placeholder="Pekanbaru">
                <label>Location</label>
            </div>

            <!-- Price -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control custom-input" name="ticket_price"
                       value="{{ $destination->ticket_price }}" placeholder="100000">
                <label>Ticket Price</label>
            </div>

            <!-- Hours -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input" name="working_hours"
                       value="{{ $destination->working_hours }}" placeholder="08.00 - 17.00">
                <label>Working Hours</label>
            </div>

            <!-- Days -->
            <div class="form-floating mb-4">
                <input type="text" class="form-control custom-input" name="working_days"
                       value="{{ $destination->working_days }}" placeholder="Monday - Sunday">
                <label>Working Days</label>
            </div>

            <!-- Button -->
             <a href="/destinations" class="btn btn-cancel">
    Cancel
</a>
            <button type="submit" class="btn btn-submit w-50">
                Update Destination
            </button>

        </form>

    </div>

</div>

@endsection