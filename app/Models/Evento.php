<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;

    protected $table = "eventos";
    protected $fillable = ['nombre', 'fecha_inicio', 'descipcion', 'colaborador_id', 'patrocinador_id', 'usuario_id', 'imagen_id'];
    protected $hidden = ['id'];

    public function obtenerEventos()
    {
        return Evento::all();
    }

    public function obtenerEventoPorId($id)
    {
        return Evento::find($id);
    }
}
