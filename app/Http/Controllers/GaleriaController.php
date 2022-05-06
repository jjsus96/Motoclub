<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeria;

class GaleriaController extends Controller
{
    protected $galerias;

    public function __construct(Galeria $galerias)
    {
        $this->galerias = $galerias;
    }

    public function index()
    {
        $galerias = $this->galerias->obtenerGalerias();
        return view('galerias.lista', ['galerias' => $galerias]);
    }

    public function create()
    {
        return view('galerias.crear');
    }

    public function store(Request $request)
    {
        $galeria = new Galeria($request->all());
        $galeria->save();
        return redirect()->action([GaleriaController::class, 'index']);
    }

    public function show($id)
    {
        $galeria = $this->galerias->obtenerGaleriaPorId($id);
        return view('galerias.ver', ['galeria' => $galeria]);
    }

    public function edit($id)
    {
        $galeria = $this->galerias->obtenerGaleriaPorId($id);
        return view('galerias.editar', ['galeria' => $galeria]);
    }

    public function update(Request $request, $id)
    {
        $galeria = Galeria::find($id);
        $galeria->fill($request->all());
        $galeria->save();
        return redirect()->action([GaleriaController::class, 'index']);
    }

    public function destroy($id)
    {
        $galeria = Galeria::find($id);
        $galeria->delete();
        return redirect()->action([GaleriaController::class, 'index']);
    }
}
