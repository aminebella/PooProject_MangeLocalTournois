@extends('admin.layouts.AdminStructure')


@section('content')
    <h1>Create New Match</h1>
    <form action="{{ route('matches.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="team1_id">Team 1</label>
            <select id="team1_id" name="team1_id" class="form-control" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="team2_id">Team 2</label>
            <select id="team2_id" name="team2_id" class="form-control" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kickoff_time">Kickoff Time</label>
            <input type="datetime-local" id="kickoff_time" name="kickoff_time" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="schedule">Schedule</option>
                <option value="finished">Finished</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
@endsection
