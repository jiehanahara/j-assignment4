@extends('master')

@section('content')

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

    <div class="card form-card shadow-lg p-4 border-0">

        <h3 class="fw-bold mb-4 text-center text-success">
            ✏️ Edit Destination
        </h3>

        <form action="/destinations/{{ $destination->id }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Name -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input @error('name') is-invalid @enderror" name="name"
                       value="{{ $destination->name }}" placeholder="Asia Heritage">
                <label>Destination Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Description -->
            <div class="form-floating mb-3">
                <textarea name="description" class="form-control custom-input"
                          placeholder="Description" style="height: 120px">{{ $destination->description }}</textarea>
                <label>Description</label>
             
            </div>

            <!-- Location -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input @error('location') is-invalid @enderror" name="location"
                       value="{{ $destination->location }}" placeholder="Pekanbaru">
                <label>Location</label>
                @error('location')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Price -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control custom-input @error('ticket_price') is-invalid @enderror" name="ticket_price"
                       value="{{ $destination->ticket_price }}" placeholder="100000">
                <label>Ticket Price</label>
                @error('ticket_price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Hours -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input @error('working_hours') is-invalid @enderror" name="working_hours"
                       value="{{ $destination->working_hours }}" placeholder="08.00 - 17.00">
                <label>Working Hours</label>
                @error('working_hours')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <!-- Days -->
            <div class="form-floating mb-4">
                <input type="text" class="form-control custom-input @error('working_days') is-invalid @enderror" name="working_days"
                       value="{{ $destination->working_days }}" placeholder="Monday - Sunday">
                <label>Working Days</label>
                @error('working_days')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
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