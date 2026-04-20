@extends("master")

@section("content")

<div class="container mt-5 d-flex justify-content-center">

    <div class="form-card p-4">

        <h3 class="fw-bold mb-4 text-center">
            ➕ Add Destination
        </h3>

        {{-- ERROR --}}
        @if ($errors->any())
            <div class="custom-alert mb-3">
                <ul class="mb-0 small">
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/destinations" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- IMAGE -->
            <div class="mb-3">
                <label class="form-label">Destination Image</label>
                <input type="file" class="form-control custom-input @error('image') is-invalid @enderror" name="image">
                @error('image')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- NAME -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" placeholder="Name">
                <label>Destination Name</label>
            </div>

            <!-- DESCRIPTION -->
            <div class="form-floating mb-3">
                <textarea name="description" class="form-control custom-input"
                          style="height: 120px">{{ old('description') }}</textarea>
                <label>Description</label>
            </div>

            <!-- LOCATION -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input @error('location') is-invalid @enderror"
                       name="location" value="{{ old('location') }}" placeholder="Location">
                <label>Location</label>
            </div>

            <!-- PRICE -->
            <div class="form-floating mb-3">
                <input type="number" class="form-control custom-input @error('ticket_price') is-invalid @enderror"
                       name="ticket_price" value="{{ old('ticket_price') }}" placeholder="Price">
                <label>Ticket Price</label>
            </div>

            <!-- HOURS -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control custom-input"
                       name="working_hours" value="{{ old('working_hours') }}">
                <label>Working Hours</label>
            </div>

            <!-- DAYS -->
            <div class="form-floating mb-4">
                <input type="text" class="form-control custom-input"
                       name="working_days" value="{{ old('working_days') }}">
                <label>Working Days</label>
            </div>

            <!-- BUTTONS -->
            <div class="d-flex justify-content-between align-items-center">
                <a href="/destinations" class="btn btn-cancel">
                    Cancel
                </a>

                <button type="submit" class="btn btn-main px-4">
                    Add →
                </button>
            </div>

        </form>

    </div>

</div>

@endsection