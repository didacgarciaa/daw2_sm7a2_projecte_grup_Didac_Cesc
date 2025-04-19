@extends('layouts.app')

@section('title', 'Gestió d\'Equips')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestió d'Equips</h1>
        @if(Auth::user()->isAdmin())
        <a href="{{ route('equips.create') }}" class="btn btn-primary">Crear Nou Equip</a>
        @endif
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Localització</th>
                            <th>Entrenador</th>
                            <th>Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($equips as $equip)
                            <tr>
                                <td>{{ $equip->identificador }}</td>
                                <td>{{ $equip->nom }}</td>
                                <td>{{ $equip->localitzacio }}</td>
                                <td>{{ $equip->entrenador }}</td>
                                <td>
                                    @if(Auth::user()->isAdmin())
                                        <a href="{{ route('equips.show', $equip->identificador) }}" class="btn btn-sm btn-info">Veure</a>
                                        <a href="{{ route('equips.edit', $equip->identificador) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <form action="{{ route('equips.destroy', $equip->identificador) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Estàs segur que vols eliminar aquest equip?')">Eliminar</button>
                                        </form>
                                    @else
                                        <a href="{{ route('consultor.equips.show', $equip->identificador) }}" class="btn btn-sm btn-info">Veure</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="mt-3">
        @if(Auth::user()->isAdmin())
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Tornar al panell</a>
        @else
            <a href="{{ route('consultor.dashboard') }}" class="btn btn-secondary">Tornar al panell</a>
        @endif
    </div>
</div>
@endsection