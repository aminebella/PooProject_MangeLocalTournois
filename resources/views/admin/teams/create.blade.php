@extends('admin.layouts.AdminStructure')

@section('content')
    <h1>Create New Team</h1>
    <form action="{{ route('teams.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Team Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="coach">Coach Name</label>
            <input type="text" id="coach" name="coach" class="form-control" value="{{ old('coach') }}" required>
        </div>
        <div class="form-group">
            <label for="stadium">Stadium</label>
            <input type="text" id="stadium" name="stadium" class="form-control" value="{{ old('stadium') }}" required>
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" id="logo" name="logo" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
