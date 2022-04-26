<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaboradores extends Model
{
    use HasFactory;

    protected $table = "colaboradores";
    protected $fillable = ['id', 'nombre_colaborador', 'telefono_colaborador', 'email_colaborador'];
    protected $hidden = [];

    public function obtenerColaboradores()
    {
        return Colaboradores::all();
    }

    public function obtenerColaboradoresPorId($id)
    {
        return Colaboradores::find($id);
    }
}