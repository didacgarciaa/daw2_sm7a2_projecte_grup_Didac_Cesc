@extends('layouts.app')

@section('title', 'Inici - Gestió d\'Equips i Jugadors')

@section('content')
<div class="text-center">
    <h1 class="display-4">Benvingut a l'Aplicació de Gestió d'Equips i Jugadors</h1>
    <p class="lead">Aquesta aplicació permet gestionar equips i jugadors de manera eficient.</p>
    <hr class="my-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Accedir a l'Aplicació</h5>
                    <p class="card-text">Fes clic al botó per iniciar sessió i accedir a les funcionalitats.</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sessió</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Més Informació</h5>
                    <p class="card-text">Per obtenir més informació sobre l'aplicació i el seu funcionament.</p>
                    <a href="{{ route('info') }}" class="btn btn-secondary">Informació</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection