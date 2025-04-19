@extends('layouts.app')

@section('title', 'Crear Jugador')

@section('content')
<div class="container">
    <h1 class="mb-4">Crear Nou Jugador</h1>

    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('jugadors.store') }}">
                @csrf

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom del Jugador</label>
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" id="nom" name="nom" value="{{ old('nom') }}" required>
                    @error('nom')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="correu" class="form-label">Correu Electrònic</label>
                    <input type="email" class="form-control @error('correu') is-invalid @enderror" id="correu" name="correu" value="{{ old('correu') }}" required>
                    @error('correu')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="telefon" class="form-label">Telèfon</label>
                    <input type="text" class="form-control @error('telefon') is-invalid @enderror" id="telefon" name="telefon" value="{{ old('telefon') }}" required>
                    @error('telefon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="adreca" class="form-label">Adreça</label>
                    <input type="text" class="form-control @error('adreca') is-invalid @enderror" id="adreca" name="adreca" value="{{ old('adreca') }}" required>
                    @error('adreca')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="ciutat" class="form-label">Ciutat</label>
                    <input type="text" class="form-control @error('ciutat') is-invalid @enderror" id="ciutat" name="ciutat" value="{{ old('ciutat') }}" required>
                    @error('ciutat')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="districte" class="form-label">Districte</label>
                    <input type="text" class="form-control @error('districte') is-invalid @enderror" id="districte" name="districte" value="{{ old('districte') }}" required>
                    @error('districte')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="equip" class="form-label">Equip</label>
                    <select class="form-select @error('equip') is-invalid @enderror" id="equip" name="equip" required>
                        <option value="">Seleccionar Equip</option>
                        @foreach($equips as $equip)
                            <option value="{{ $equip->identificador }}" {{ old('equip') == $equip->identificador ? 'selected' : '' }}>
                                {{ $equip->nom }}
                            </option>
                        @endforeach
                    </select>
                    @error('equip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="d-flex">
                    <button type="submit" class="btn btn-primary me-2">Crear Jugador</button>
                    <a href="{{ route('jugadors.index') }}" class="btn btn-secondary">Cancel·lar</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection