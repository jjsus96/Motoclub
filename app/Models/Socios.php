<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socios extends Model
{
    use HasFactory;

    protected $table = "socios";
    protected $fillable = ['id', 'usuario_id', 'nombre_socio', 'apellidos', 'fecha_nacimiento', 'direccion', 'padrino', 'motocicleta', 'foto_carnet'];
    protected $hidden = [];

    public function obtenerSocios()
    {
        return Socios::all();
    }

    public function obtenerSociosPorId($id)
    {
        return Socios::find($id);
    }
}
