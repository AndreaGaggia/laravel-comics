@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.articles.create') }}" class="btn btn-success mb-2">Insert new Article</a>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->title }}</td>
                    <td class="d-flex justify-content-around">
                        <a href="#" class="show">Show</a>
                        <a href="#" class="edit">Edit</a>
                        <a href="#" class="delete">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
