@extends('layouts.admin')

@section('content')
    <h2>New Article</h2>
    <form action="{{ route('admin.articles.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row form-group">
            <div class="col">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    value="{{ old('title') }}">
            </div>
            <div class="col">
                <label for="sub_title">Sub Title</label>
                <input type="text" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title"
                    id="sub_title" value="{{ old('sub_title') }}">
            </div>
            <div class="col">
                <label for="super_title">Super Title</label>
                <input type="text" class="form-control @error('super_title') is-invalid @enderror" name="super_title"
                    id="super_title" value="{{ old('super_title') }}">
            </div>
        </div>
        <div class="form-row form-group">
            <div class="col">
                <label for="cover">Cover</label>
                <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover" id="cover"
                    value="{{ old('cover') }}">
            </div>
        </div>
        {{-- submit --}}
        <input type="submit" class="btn btn-lg btn-primary" value="Insert">
    </form>
@endsection
