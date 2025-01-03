@extends('admin.layouts.AdminStructure')

@section('title', 'Classement')

@section('content')
<h2>Classement des Équipes</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Équipe</th>
            <th>Matchs Joués</th>
            <th>Victoires</th>
            <th>Défaites</th>
            <th>Égalités</th>
            <th>Points</th>
            <th>Buts</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classements as $classement)
            <tr>
                <td>{{ $classement->team->name }}</td>
                <td>{{ $classement->match_played }}</td>
                <td>{{ $classement->win }}</td>
                <td>{{ $classement->lose }}</td>
                <td>{{ $classement->tied }}</td>
                <td>{{ $classement->points }}</td>
                <td>{{ $classement->goals }}</td>
                {{-- <td>
                    <a href="{{ route('classements.edit', $classement) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('classements.destroy', $classement) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> --}}
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
