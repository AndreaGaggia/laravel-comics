@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.comics.create') }}" class="btn btn-success mb-2">Insert new Comic</a>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td class="d-flex justify-content-around">
                        <a href="/comics/{{ $comic->id }}" class="show">Show</a>
                        <a href="{{ route('admin.comics.edit', ['comic' => $comic->id]) }}" class="edit">Edit</a>
                        <!-- Button trigger modal -->
                        <a class="delete" data-toggle="modal" data-target="#delete-{{ $comic->id }}" role="button">
                            Delete
                        </a>
                        <!-- Modal -->
                        <div class="modal fade" id="delete-{{ $comic->id }}" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-dark">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Will delete
                                            <em class="font-weight-bold">"{{ $comic->title }}"</em>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        This is irreverisible. Are you sure?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nooooo</button>
                                        <form action="{{ route('admin.comics.destroy', ['comic' => $comic->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" value="Yeah, Delete" class="btn btn-danger">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
