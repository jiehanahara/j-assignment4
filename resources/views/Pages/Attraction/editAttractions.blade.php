@extends('master')

@section('content')

<div class="container mt-5 d-flex justify-content-center">

    <div class="form-card p-4" style="max-width: 550px; width: 100%;">

        <h3 class="fw-bold mb-4 text-center">
            ✏️ Edit Attraction
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

        <form action="{{ route('attractions.update', $attraction->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- DESTINATION -->
            <div class="form-floating mb-3">
                <select class="form-select custom-input @error('destination_id') is-invalid @enderror" 
                        name="destination_id">
                    <option value="">Select Destination</option>
                    @foreach($destinations as $destination)
                        <option value="{{ $destination->id }}" 
                            {{ $attraction->destination_id == $destination->id ? 'selected' : '' }}>
                            {{ $destination->name }}
                        </option>
                    @endforeach
                </select>
                <label>Destination</label>
            </div>

            <!-- NAME -->
            <div class="form-floating mb-3">
                <input type="text" 
                       class="form-control custom-input @error('name') is-invalid @enderror" 
                       name="name"
                       value="{{ $attraction->name }}" 
                       placeholder="Name">
                <label>Name</label>
            </div>

            <!-- DESCRIPTION -->
            <div class="form-floating mb-4">
                <textarea class="form-control custom-input @error('description') is-invalid @enderror" 
                          name="description"
                          style="height: 140px"
                          placeholder="Description">{{ $attraction->description }}</textarea>
                <label>Description</label>
            </div>

            <!-- BUTTONS -->
            <div class="d-flex justify-content-between align-items-center">

                <a href="/attractions" class="btn btn-cancel">
                    ← Cancel
                </a>

                <button type="submit" class="btn btn-main px-4">
                    Update →
                </button>

            </div>

        </form>

    </div>

</div>

@endsection