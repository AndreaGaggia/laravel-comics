@extends('layouts.admin')

@section('content')
    <a href="{{ route('admin.illustrators.create') }}" class="btn btn-success mb-2">Insert new Illustrator</a>
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Fullname</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($illustrators as $illustrator)
                <tr>
                    <td>{{ $illustrator->id }}</td>
                    <td>{{ $illustrator->name }}</td>
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
