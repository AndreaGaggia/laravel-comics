@extends('layouts.admin')

@section('content')
    <h2>New Illustrator <i class="fas fa-paint-brush"></i></h2>
    <form action="{{ route('admin.illustrators.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Illustrators's Full Name</label>
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
