<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    
    protected $table = "galeria";
    protected $fillable = ['id', 'imagen', 'evento_id'];
    protected $hidden = [];

    public function obtenerGaleria()
    {
        return Galeria::all();
    }

    public function obtenerGaleriaPorId($id)
    {
        return Galeria::find($id);
    }
}
