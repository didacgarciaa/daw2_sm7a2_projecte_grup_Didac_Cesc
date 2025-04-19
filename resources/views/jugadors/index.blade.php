@extends('layouts.app')

@section('title', 'Gestió de Jugadors')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Gestió de Jugadors</h1>
        @if(Auth::user()->isAdmin())
        <a href="{{ route('jugadors.create') }}" class="btn btn-primary">Crear Nou Jugador</a>
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
                            <th>Correu</th>
                            <th>Telèfon</th>
                            <th>Equip</th>
                            <th>Accions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($jugadors as $jugador)
                            <tr>
                                <td>{{ $jugador->identificador }}</td>
                                <td>{{ $jugador->nom }}</td>
                                <td>{{ $jugador->correu }}</td>
                                <td>{{ $jugador->telefon }}</td>
                                <td>{{ $jugador->equip()->first()->nom }}</td>
                                <td>
                                    @if(Auth::user()->isAdmin())
                                        <a href="{{ route('jugadors.show', $jugador->identificador) }}" class="btn btn-sm btn-info">Veure</a>
                                        <a href="{{ route('jugadors.edit', $jugador->identificador) }}" class="btn btn-sm btn-warning">Editar</a>
                                        <form action="{{ route('jugadors.destroy', $jugador->identificador) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Estàs segur que vols eliminar aquest jugador?')">Eliminar</button>
                                        </form>
                                    @else
                                        <a href="{{ route('consultor.jugadors.show', $jugador->identificador) }}" class="btn btn-sm btn-info">Veure</a>
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