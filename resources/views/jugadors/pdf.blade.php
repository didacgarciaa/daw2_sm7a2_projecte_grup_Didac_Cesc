<!-- resources/views/jugadors/pdf.blade.php -->
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Jugador {{ $jugador->nom }}</title>
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
        <h1>Gestió de Jugadors</h1>
        <h2>Detalls del Jugador</h2>
    </div>

    <div class="info-section">
        <h2>{{ $jugador->nom }}</h2>

        <div class="info-item">
            <span class="label">ID:</span> {{ $jugador->identificador }}
        </div>
        <div class="info-item">
            <span class="label">Correu electrònic:</span> {{ $jugador->correu }}
        </div>
        <div class="info-item">
            <span class="label">Adreça:</span> {{ $jugador->adreca }}
        </div>
        <div class="info-item">
            <span class="label">Ciutat:</span> {{ $jugador->ciutat }}
        </div>
        <div class="info-item">
            <span class="label">Districte:</span> {{ $jugador->districte }}
        </div>
        <div class="info-item">
            <span class="label">Telèfon:</span> {{ $jugador->telefon }}
        </div>

        @if($jugador->equip)
        <div class="info-item">
            <span class="label">Equip:</span> {{ $jugador->equip->nom }}
        </div>
        @endif
    </div>

    <div class="footer">
        <p>Document generat el {{ now()->format('d/m/Y H:i:s') }}</p>
        <p>CFGS Desenvolupament d'Aplicacions Web - Jesuïtes El Clot</p>
    </div>
</body>
</html>
