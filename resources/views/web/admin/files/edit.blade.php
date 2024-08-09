<!-- resources/views/web/admin/files/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit File Record</h1>
    <form action="{{ route('admin.files.update', $file->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $file->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ $file->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
