<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patrocinador;

class PatrocinadorController extends Controller
{
    protected $patrocinadores;

    public function __construct(Patrocinador $patrocinadores)
    {
        $this->patrocinadores = $patrocinadores;
    }

    public function index()
    {
        $patrocinadores = $this->patrocinadores->obtenerPatrocinadores();
        return view('patrocinadores.lista', ['patrocinadores' => $patrocinadores]);
    }

    public function create()
    {
        return view('patrocinadores.crear');
    }

    public function store(Request $request)
    {
        $patrocinador = new Patrocinador($request->all());
        $patrocinador->save();
        return redirect()->action([PatrocinadorController::class, 'index']);
    }

    public function show($id)
    {
        $patrocinador = $this->patrocinadores->obtenerPatrocinadorPorId($id);
        return view('patrocinadores.ver', ['patrocinador' => $patrocinador]);
    }

    public function edit($id)
    {
        $patrocinador = $this->patrocinadores->obtenerPatrocinadorPorId($id);
        return view('patrocinadores.editar', ['patrocinador' => $patrocinador]);
    }

    public function update(Request $request, $id)
    {
        $patrocinador = Patrocinador::find($id);
        $patrocinador->fill($request->all());
        $patrocinador->save();
        return redirect()->action([PatrocinadorController::class, 'index']);
    }

    public function destroy($id)
    {
        $patrocinador = Patrocinador::find($id);
        $patrocinador->delete();
        return redirect()->action([PatrocinadorController::class, 'index']);
    }
}
