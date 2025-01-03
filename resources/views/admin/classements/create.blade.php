@extends('layouts.AdminStructure')

@section('content')
    <h1>Create New Classement</h1>
    <form action="{{ route('classements.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="team_id">Team</label>
            <select id="team_id" name="team_id" class="form-control" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection