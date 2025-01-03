@extends('admin.layouts.AdminStructure')


@section('content')
    <h1>Edit Match</h1>
    <form action="{{ route('matches.update', $matche) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="team1_id">Team 1</label>
            <select id="team1_id" name="team1_id" class="form-control" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}" {{ $matche->team1_id == $team->id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="team2_id">Team 2</label>
            <select id="team2_id" name="team2_id" class="form-control" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}" {{ $matche->team2_id == $team->id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="kickoff_time">Kickoff Time</label>
            <input type="datetime-local" id="kickoff_time" name="kickoff_time" class="form-control" value="{{ $matche->kickoff_time->format('Y-m-d\TH:i') }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control" required>
                <option value="schedule" {{ $matche->status === 'schedule' ? 'selected' : '' }}>Schedule</option>
                <option value="finished" {{ $matche->status === 'finished' ? 'selected' : '' }}>Finished</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
