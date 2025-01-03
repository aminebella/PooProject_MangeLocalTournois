@extends('admin.layouts.AdminStructure')

@section('content')
    <h1>Edit Player</h1>
    <form action="{{ route('players.update', $player) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" class="form-control" value="{{ old('fullName', $player->fullName) }}" required>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" id="age" name="age" class="form-control" value="{{ old('age', $player->age) }}" required>
        </div>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="number" id="number" name="number" class="form-control" value="{{ old('number', $player->number) }}" required>
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <select id="position" name="position" class="form-control" required>
                <option value="Goalkeeper" {{ $player->position === 'Goalkeeper' ? 'selected' : '' }}>Goalkeeper</option>
                <option value="Defender" {{ $player->position === 'Defender' ? 'selected' : '' }}>Defender</option>
                <option value="Midfielder" {{ $player->position === 'Midfielder' ? 'selected' : '' }}>Midfielder</option>
                <option value="Forward" {{ $player->position === 'Forward' ? 'selected' : '' }}>Forward</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nationality">Nationality</label>
            <input type="text" id="nationality" name="nationality" class="form-control" value="{{ old('nationality', $player->nationality) }}" required>
        </div>
        <div class="form-group">
            <label for="team_id">Team</label>
            <select id="team_id" name="team_id" class="form-control" required>
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}" {{ $player->team_id == $team->id ? 'selected' : '' }}>
                        {{ $team->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
