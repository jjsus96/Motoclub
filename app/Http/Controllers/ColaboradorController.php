<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colaborador;

class ColaboradorController extends Controller
{
    protected $colaboradores;

    public function __construct(Colaborador $colaboradores)
    {
        $this->colaboradores = $colaboradores;
    }

    public function index()
    {
        $colaboradores = $this->colaboradores->obtenerColaboradores();
        return view('colaboradores.lista', ['colaboradores' => $colaboradores]);
    }

    public function create()
    {
        return view('colaboradores.crear');
    }

    public function store(Request $request)
    {
        $colaborador = new Colaborador($request->all());
        $colaborador->save();
        return redirect()->action([ColaboradorController::class, 'index']);
    }

    public function show($id)
    {
        $colaborador = $this->colaboradores->obtenerColaboradorPorId($id);
        return view('colaboradores.ver', ['colaborador' => $colaborador]);
    }

    public function edit($id)
    {
        $colaborador = $this->colaboradores->obtenerColaboradorPorId($id);
        return view('colaboradores.editar', ['colaborador' => $colaborador]);
    }

    public function update(Request $request, $id)
    {
        $colaborador = Colaborador::find($id);
        $colaborador->fill($request->all());
        $colaborador->save();
        return redirect()->action([ColaboradorController::class, 'index']);
    }

    public function destroy($id)
    {
        $colaborador = Colaborador::find($id);
        $colaborador->delete();
        return redirect()->action([ColaboradorController::class, 'index']);
    }
}