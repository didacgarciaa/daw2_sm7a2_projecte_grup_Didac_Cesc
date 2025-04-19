@extends('layouts.app')

@section('title', 'Detalls de l\'Equip')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalls de l'Equip</h1>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Informació de l'Equip</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>ID:</strong> {{ $equip->identificador }}</p>
                    <p><strong>Nom:</strong> {{ $equip->nom }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Localització:</strong> {{ $equip->localitzacio }}</p>
                    <p><strong>Entrenador:</strong> {{ $equip->entrenador }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Jugadors d'Aquest Equip</h5>
        </div>
        <div class="card-body">
            @if($equip->jugadors->count() > 0)
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Correu</th>
                                <th>Telèfon</th>
                                <th>Accions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equip->jugadors as $jugador)
                                <tr>
                                    <td>{{ $jugador->identificador }}</td>
                                    <td>{{ $jugador->nom }}</td>
                                    <td>{{ $jugador->correu }}</td>
                                    <td>{{ $jugador->telefon }}</td>
                                    <td>
                                        @if(Auth::user()->isAdmin())
                                            <a href="{{ route('jugadors.show', $jugador->identificador) }}" class="btn btn-sm btn-info">Veure</a>
                                        @else
                                            <a href="{{ route('consultor.jugadors.show', $jugador->identificador) }}" class="btn btn-sm btn-info">Veure</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-muted">Aquest equip no té jugadors assignats.</p>
            @endif
        </div>
    </div>

    <div class="d-flex">
        @if(Auth::user()->isAdmin())
            <a href="{{ route('equips.edit', $equip->identificador) }}" class="btn btn-warning me-2">Editar Equip</a>
            <form action="{{ route('equips.destroy', $equip->identificador) }}" method="POST" class="d-inline me-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Estàs segur que vols eliminar aquest equip?')">Eliminar Equip</button>
            </form>
            <a href="{{ route('equips.index') }}" class="btn btn-secondary">Tornar a la Llista</a>
        @else
            <a href="{{ route('consultor.equips.index') }}" class="btn btn-secondary">Tornar a la Llista</a>
        @endif
    </div>
</div>
@endsection