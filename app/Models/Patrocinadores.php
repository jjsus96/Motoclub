<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patrocinadores extends Model
{
    use HasFactory;

    protected $table = "patrocinadores";
    protected $fillable = ['id', 'nombre_patrocinador', 'telefono_patrocinador', 'email_patrocinador'];
    protected $hidden = [];

    public function obtenerPatrocinadores()
    {
        return Patrocinadores::all();
    }

    public function obtenerPatrocinadoresPorId($id)
    {
        return Patrocinadores::find($id);
    }
}
