@extends('layouts.app')

@section('title', 'Panell d\'Administració')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Panell d'Administració</h1>
        <span class="badge bg-primary fs-6">Usuari: Administrador</span>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gestió d'Usuaris</h5>
                    <p class="card-text">Administra els usuaris de l'aplicació.</p>
                    <a href="{{ route('users.index') }}" class="btn btn-primary">Gestionar Usuaris</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gestió d'Equips</h5>
                    <p class="card-text">Administra els equips registrats.</p>
                    <a href="{{ route('equips.index') }}" class="btn btn-primary">Gestionar Equips</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Gestió de Jugadors</h5>
                    <p class="card-text">Administra els jugadors registrats.</p>
                    <a href="{{ route('jugadors.index') }}" class="btn btn-primary">Gestionar Jugadors</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection