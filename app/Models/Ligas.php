<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ligas extends Model
{
    use HasFactory;
    
    protected $table = 'ligas';

    protected $fillable = [
        'nombre',
        'categoria',
        'cantidad',
        'logo',
    ];
    public function equipos()
    {
        return $this->hasMany(Equipo::class);
    }
}