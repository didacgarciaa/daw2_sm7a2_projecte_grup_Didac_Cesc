<!-- resources/views/equips/pdf.blade.php -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Equip {{ $equip->nom }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }
        .info-section {
            margin-bottom: 20px;
        }
        h1 {
            color: #2c3e50;
        }
        h2 {
            color: #3498db;
            border-bottom: 1px solid #eee;
            padding-bottom: 5px;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .label {
            font-weight: bold;
            min-width: 120px;
            display: inline-block;
        }
        .players-list {
            margin-top: 20px;
        }
        .player-item {
            padding: 5px 0;
            border-bottom: 1px dashed #eee;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #777;
            border-top: 1px solid #eee;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Gestió d'Equips i Jugadors</h1>
        <h2>Detalls de l'Equip</h2>
    </div>
    
    <div class="info-section">
        <h2>{{ $equip->nom }}</h2>
        
        <div class="info-item">
            <span class="label">ID:</span> {{ $equip->identificador }}
        </div>
        <div class="info-item">
            <span class="label">Localització:</span> {{ $equip->localitzacio }}
        </div>
        <div class="info-item">
            <span class="label">Entrenador:</span> {{ $equip->entrenador }}
        </div>
        <div class="info-item">
            <span class="label">Data de creació:</span> {{ $equip->created_at->format('d/m/Y H:i') }}
        </div>
        <div class="info-item">
            <span class="label">Última actualització:</span> {{ $equip->updated_at->format('d/m/Y H:i') }}
        </div>
    </div>
    
    <div class="players-list">
        <h2>Jugadors de l'Equip</h2>
        
        @if($equip->jugadors->count() > 0)
            @foreach($equip->jugadors as $jugador)
                <div class="player-item">
                    {{ $jugador->nom }} - {{ $jugador->correu }}
                </div>
            @endforeach
        @else
            <p>Aquest equip no té jugadors assignats.</p>
        @endif
    </div>
    
    <div class="footer">
        <p>Document generat el {{ now()->format('d/m/Y H:i:s') }}</p>
        <p>CFGS Desenvolupament d'Aplicacions Web - Jesuïtes El Clot</p>
    </div>
</body>
</html>