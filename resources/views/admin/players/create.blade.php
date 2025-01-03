@extends('admin.layouts.AdminStructure')


@section('content')
    <h1>Create New Player</h1>
    <form action="{{ route('players.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" class="form-control" value="{{ old('fullName') }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" class="form-control" value="{{ old('age') }}" required>
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="number" id="number" name="number" class="form-control" value="{{ old('number') }}" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <select id="position" name="position" class="form-control" required>
                <option value="Goalkeeper">Goalkeeper</option>
                <option value="Defender">Defender</option>
                <option value="Midfielder">Midfielder</option>
                <option value="Forward">Forward</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" id="nationality" name="nationality" class="form-control" value="{{ old('nationality') }}" required>
        </div>
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
