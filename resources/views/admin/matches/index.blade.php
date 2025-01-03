@extends('admin.layouts.AdminStructure')

@section('content')
    <h1>Matches</h1>
    <a href="{{ route('matches.create') }}" class="btn btn-primary">Create New Match</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Team 1</th>
                <th>Team 2</th>
                <th>Kickoff Time</th>
                <th>Status</th>
                <th>Score</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matches as $match)
                <tr>
                    <td>{{ $match->team1->name }}</td>
                    <td>{{ $match->team2->name }}</td>
                    <td>{{ $match->kickoff_time }}</td>
                    <td>{{ ucfirst($match->status) }}</td>
                    <td>{{ $match->score_team1 ?? '-' }} - {{ $match->score_team2 ?? '-' }}</td>
                    <td>
                        <a href="{{ route('matches.edit', $match) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('matches.destroy', $match) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
