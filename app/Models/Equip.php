<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equip extends Model
{
    use HasFactory;

    protected $table = 'equips';
    protected $primaryKey = 'identificador';

    protected $fillable = [
        'nom',
        'localitzacio',
        'entrenador',
    ];

    public function jugadors()
    {
        return $this->hasMany(Jugador::class, 'equip', 'identificador');
    }
}