<!-- resources/views/web/admin/files/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>File Records</h1>
    <a href="{{ route('admin.files.create') }}" class="btn btn-primary">Add New File Record</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($files as $file)
                <tr>
                    <td>{{ $file->id }}</td>
                    <td>{{ $file->name }}</td>
                    <td>{{ $file->description }}</td>
                    <td>
                        <a href="{{ route('admin.files.edit', $file->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('admin.files.destroy', $file->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
