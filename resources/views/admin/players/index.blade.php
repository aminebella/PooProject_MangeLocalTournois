@extends('admin.layouts.AdminStructure')

@section('content')
    <h1>Players</h1>
    <a href="{{ route('players.create') }}" class="btn btn-primary">Create New Player</a>
    
    <table class="table">
        <thead>
            <tr>
                <th>Full Name</th>
                <th>Age</th>
                <th>Number</th>
                <th>Position</th>
                <th>Nationality</th>
                <th>Team</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $player->fullName }}</td>
                    <td>{{ $player->age }}</td>
                    <td>{{ $player->number }}</td>
                    <td>{{ $player->position }}</td>
                    <td>{{ $player->nationality }}</td>
                    <td>{{ $player->team->name }}</td>
                    <td>
                        <a href="{{ route('players.edit', $player) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('players.destroy', $player) }}" method="POST" style="display:inline;">
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
