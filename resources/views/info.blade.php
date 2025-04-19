@extends('layouts.app')

@section('title', 'Informació - Gestió d\'Equips i Jugadors')

@section('content')
<div class="container">
    <h1 class="mb-4">Informació de l'Aplicació</h1>
    
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2 class="h5 mb-0">Propòsit de l'Aplicació</h2>
        </div>
        <div class="card-body">
            <p>Aquesta aplicació web ha estat dissenyada per gestionar equips i jugadors de manera eficient. Permet:</p>
            <ul>
                <li>Administrar diferents equips amb les seves característiques</li>
                <li>Gestionar els jugadors vinculats a cada equip</li>
                <li>Consultar informació detallada sobre equips i jugadors</li>
            </ul>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2 class="h5 mb-0">Com Accedir a l'Aplicació</h2>
        </div>
        <div class="card-body">
            <h3 class="h6">Iniciar Sessió</h3>
            <p>Per accedir a l'aplicació, segueix aquests passos:</p>
            <ol>
                <li>Fes clic al botó "Iniciar Sessió" a la pàgina d'inici o al menú de navegació</li>
                <li>Introdueix el teu correu electrònic i contrasenya</li>
                <li>Fes clic a "Accedir"</li>
            </ol>
            
            <p>Existeixen dos tipus d'usuaris:</p>
            <ul>
                <li><strong>Administrador:</strong> Accés complet per gestionar equips, jugadors i usuaris</li>
                <li><strong>Consultor:</strong> Accés només per consultar informació</li>
            </ul>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            <h2 class="h5 mb-0">Com Tancar Sessió</h2>
        </div>
        <div class="card-body">
            <p>Per sortir de l'aplicació de manera segura:</p>
            <ol>
                <li>Fes clic al teu nom d'usuari a la part superior dreta de la pantalla</li>
                <li>Selecciona "Tancar sessió" del menú desplegable</li>
            </ol>
        </div>
    </div>
    
    <div class="text-center mt-4">
        <a href="{{ route('home') }}" class="btn btn-primary">Tornar a l'inici</a>
    </div>
</div>
@endsection