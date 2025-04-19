@extends('layouts.app')

@section('title', 'Crear Equip')

@section('content')
<div class="container">
    <h1 class="mb-4">Crear Nou Equip</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('equips.store') }}">
                @csrf
                
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom de l'Equip</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="localitzacio" class="form-label">Localització</label>
                    <input type="text" class="form-control @error('localitzacio') is-invalid @enderror" id="localitzacio" name="localitzacio" value="{{ old('localitzacio') }}" required>
                    @error('localitzacio')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="entrenador" class="form-label">Entrenador</label>
                    <input type="text" class="form-control @error('entrenador') is-invalid @enderror" id="entrenador" name="entrenador" value="{{ old('entrenador') }}" required>
                    @error('entrenador')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="d-flex">
                    <button type="submit" class="btn btn-primary me-2">Crear Equip</button>
                    <a href="{{ route('equips.index') }}" class="btn btn-secondary">Cancel·lar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection