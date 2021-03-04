@extends('layouts.admin')

@section('content')
    <h2>New Writer <i class="fas fa-pen-nib"></i></h2>
    <form action="{{ route('admin.writers.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Writer's Full Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name"
                value="{{ old('name') }}">
            @error('name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        {{-- submit --}}
        <input type="submit" class="btn btn-lg btn-primary" value="Insert">
    </form>
@endsection
