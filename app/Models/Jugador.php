<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = 'jugadors';
    protected $primaryKey = 'identificador';

    protected $fillable = [
        'nom',
        'correu',
        'adreca',
        'ciutat',
        'districte',
        'telefon',
        'equip',
    ];

    public function equip()
    {
        return $this->belongsTo(Equip::class, 'equip', 'identificador');
    }
}