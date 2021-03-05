@extends('layouts.admin')

@section('content')
    <h2>Edit form <i class="fas fa-mask"></i></h2>
    <form action="{{ route('admin.comics.update', ['comic' => $comic->id]) }}" method="post"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row form-group">
            <div class="col">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title"
                    value="{{ $comic->title }}">
            </div>
            <div class="col">
                <label for="issue">Issue/Volume</label>
                <input type="number" class="form-control @error('issue') is-invalid @enderror" name="issue" id="issue"
                    value="{{ $comic->issue }}">
            </div>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                cols="30" rows="3">{{ $comic->description }}</textarea>
        </div>
        <div class="form-row form-group">
            <div class="col">
                <label for="price">Price</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" name="price"
                    id="price" value="{{ $comic->price }}">
            </div>
            <div class="col">
                <label for="on_sale_date">On Sale Date</label>
                <input type="date" class="form-control @error('on_sale_date') is-invalid @enderror" name="on_sale_date"
                    id="on_sale_date" value="{{ $comic->on_sale_date }}">
            </div>
        </div>
        <div class="form-row form-group">
            <div class="col">
                <label for="writers">Writer(s)</label>
                <select name="writers[]" id="writers" class="form-control @error('writers') is-invalid @enderror" multiple>
                    @foreach ($writers as $writer)
                        <option value="{{ $writer->id }}" {{ $comic->writers->contains($writer) ? 'selected' : '' }}>
                            {{ $writer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <label for="illustrators">Illustrator(s</label>
                <select name="illustrators[]" id="illustrators"
                    class="form-control @error('illustrators') is-invalid @enderror" multiple>
                    @foreach ($illustrators as $illustrator)
                        <option value="{{ $illustrator->id }}"
                            {{ $comic->illustrators->contains($illustrator) ? 'selected' : '' }}>
                            {{ $illustrator->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-row form-group">
            <div class="col">
                <label for="cover">Cover</label>
                @if ($comic->cover)
                    <small class="text-info font-weight-bold">(already exists in the db)</small>
                @endif
                <input type="file" class="form-control @error('cover') is-invalid @enderror" name="cover" id="cover">
            </div>
            <div class="col">
                <label for="bg_img">Bg image</label>
                @if ($comic->bg_img)
                    <small class="text-info font-weight-bold">(already exists in the db)</small>
                @endif
                <input type="file" class="form-control @error('bg_img') is-invalid @enderror" name="bg_img" id="bg_img">
            </div>
        </div>
        {{-- submit --}}
        <input type="submit" class="btn btn-lg btn-primary" value="Edit">
    </form>
@endsection
