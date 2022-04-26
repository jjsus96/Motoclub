<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    protected $table = "eventos";
    protected $fillable = ['id', 'nombre', 'fecha_inicio', 'descipcion', 'colaborador_id', 'patrocinador_id', 'usuario_id', 'imagen_id'];
    protected $hidden = [];

    public function obtenerEventos()
    {
        return Eventos::all();
    }

    public function obtenerEventosPorId($id)
    {
        return Eventos::find($id);
    }
}
