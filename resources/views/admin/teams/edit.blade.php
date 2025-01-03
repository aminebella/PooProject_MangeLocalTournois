@extends('admin.layouts.AdminStructure')

@section('content')
    <h1>Edit Team</h1>
    <form action="{{ route('teams.update', $team) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Team Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $team->name) }}" required>
        </div>
        <div class="form-group">
            <label for="coach">Coach Name</label>
            <input type="text" id="coach" name="coach" class="form-control" value="{{ old('coach', $team->coach) }}" required>
        </div>
        <div class="form-group">
            <label for="stadium">Stadium</label>
            <input type="text" id="stadium" name="stadium" class="form-control" value="{{ old('stadium', $team->stadium) }}" required>
        </div>
        <div class="form-group">
            <label for="logo">Logo</label>
            <input type="file" id="logo" name="logo" class="form-control">
            @if($team->logo)
                <img src="{{ asset('storage/' . $team->logo) }}" alt="Logo" class="img-thumbnail mt-2" width="100">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
