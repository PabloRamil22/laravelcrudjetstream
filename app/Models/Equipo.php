<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    use HasFactory;
    
    protected $table = 'equipo';

    protected $fillable = [
        'nombre',
        'plantilla',
        'localidad',
        'escudo',
    ];

    public function liga()
    {
        return $this->belongsTo(Ligas::class);
    }
}
