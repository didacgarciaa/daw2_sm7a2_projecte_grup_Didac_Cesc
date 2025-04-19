@extends('layouts.app')

@section('title', 'Detalls del Jugador')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalls del Jugador</h1>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Informació del Jugador</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>ID:</strong> {{ $jugador->identificador }}</p>
                    <p><strong>Nom:</strong> {{ $jugador->nom }}</p>
                    <p><strong>Correu electrònic:</strong> {{ $jugador->correu }}</p>
                    <p><strong>Telèfon:</strong> {{ $jugador->telefon }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Adreça:</strong> {{ $jugador->adreca }}</p>
                    <p><strong>Ciutat:</strong> {{ $jugador->ciutat }}</p>
                    <p><strong>Districte:</strong> {{ $jugador->districte }}</p>
                    <p><strong>Equip:</strong> {{ $jugador->equip()->first()->nom }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Informació de l'Equip</h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Nom de l'Equip:</strong> {{ $jugador->equip()->first()->nom }}</p>
                    <p><strong>Localització:</strong> {{ $jugador->equip()->first()->localitzacio }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Entrenador:</strong> {{ $jugador->equip()->first()->entrenador }}</p>
                    <p><strong>Total de Jugadors:</strong> {{ $jugador->equip()->first()->jugadors()->count() }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex">
        @if(Auth::user()->isAdmin())
            <a href="{{ route('jugadors.edit', $jugador->identificador) }}" class="btn btn-warning me-2">Editar Jugador</a>
            <form action="{{ route('jugadors.destroy', $jugador->identificador) }}" method="POST" class="d-inline me-2">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Estàs segur que vols eliminar aquest jugador?')">Eliminar Jugador</button>
            </form>
            <a href="{{ route('jugadors.index') }}" class="btn btn-secondary">Tornar a la Llista</a>
        @else
            <a href="{{ route('consultor.jugadors.index') }}" class="btn btn-secondary">Tornar a la Llista</a>
        @endif
    </div>
</div>
@endsection