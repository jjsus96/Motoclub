<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    use HasFactory;
    
    protected $table = "galeria";
    protected $fillable = ['imagen'];
    protected $hidden = ['id', 'evento_id'];

    public function obtenerGalerias()
    {
        return Galeria::all();
    }

    public function obtenerGaleriaPorId($id)
    {
        return Galeria::find($id);
    }
}
