{{-- @extends('admin.layouts.AdminStructure')

@section('title', 'Teams')

@section('content')
    <h1>Teams</h1>
    <a href="{{ route('teams.create') }}">Add Team</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Coach</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teams as $team)
                <tr>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->coach }}</td>
                    <td>
                        <a href="{{ route('teams.edit', $team->id) }}">Edit</a>
                        <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection --}}




@extends('admin.layouts.AdminStructure')

@section('title', 'Gestion des Équipes')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Teams</h2>
    <a href="{{ route('teams.create') }}" class="btn btn-success">Add Team</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Coach</th>
            <th>Stadium</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $team)
            <tr>
                <td>{{ $team->name }}</td>
                <td>{{ $team->coach }}</td>
                <td>{{ $team->stadium }}</td>
                <td>
                    <a href="{{ route('teams.edit', $team->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onClick="confirme('are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection

