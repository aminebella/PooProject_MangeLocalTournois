@extends('layouts.AdminStructure')

@section('content')
    <h1>Edit Classement</h1>
    <form action="{{ route('classements.update', $classement) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="match_played">Matches Played</label>
            <input type="number" id="match_played" name="match_played" class="form-control" value="{{ old('match_played', $classement->match_played) }}" required>
        </div>
        <div class="form-group">
            <label for="win">Wins</label>
            <input type="number" id="win" name="win" class="form-control" value="{{ old('win', $classement->win) }}" required>
        </div>
        <div class="form-group">
            <label for="lose">Loses</label>
            <input type="number" id="lose" name="lose" class="form-control" value="{{ old('lose', $classement->lose) }}" required>
        </div>
        <div class="form-group">
            <label for="tied">Ties</label>
            <input type="number" id="tied" name="tied" class="form-control" value="{{ old('tied', $classement->tied) }}" required>
        </div>
        <div class="form-group">
            <label for="points">Points</label>
            <input type="number" id="points" name="points" class="form-control" value="{{ old('points', $classement->points) }}" required>
        </div>
        <div class="form-group">
            <label for="goals">Goals</label>
            <input type="number" id="goals" name="goals" class="form-control" value="{{ old('goals', $classement->goals) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection