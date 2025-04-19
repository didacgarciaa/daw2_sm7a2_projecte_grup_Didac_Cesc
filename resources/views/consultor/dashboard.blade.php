@extends('layouts.app')

@section('title', 'Panell de Consulta')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Panell de Consulta</h1>
        <span class="badge bg-success fs-6">Usuari: Consultor</span>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Consulta d'Equips</h5>
                    <p class="card-text">Visualitza la informació dels equips registrats.</p>
                    <a href="{{ route('consultor.equips.index') }}" class="btn btn-primary">Veure Equips</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Consulta de Jugadors</h5>
                    <p class="card-text">Visualitza la informació dels jugadors registrats.</p>
                    <a href="{{ route('consultor.jugadors.index') }}" class="btn btn-primary">Veure Jugadors</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection