<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;

class EventosController extends Controller
{
    protected $eventos;

    public function __construct(Evento $eventos)
    {
        $this->eventos = $eventos;
    }

    public function index()
    {
        $eventos = $this->eventos->obtenerEventos();
        return view('eventos.lista', ['eventos' => $eventos]);
    }

    public function create()
    {
        return view('eventos.crear');
    }

    public function store(Request $request)
    {
        $evento = new Evento($request->all());
        $evento->save();
        return redirect()->action([EventoController::class, 'index']);
    }

    public function show($id)
    {
        $evento = $this->eventos->obtenerEventoPorId($id);
        return view('eventos.ver', ['evento' => $evento]);
    }

    public function edit($id)
    {
        $evento = $this->eventos->obtenerEventoPorId($id);
        return view('eventos.editar', ['evento' => $evento]);
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::find($id);
        $evento->fill($request->all());
        $evento->save();
        return redirect()->action([EventoController::class, 'index']);
    }

    public function destroy($id)
    {
        $evento = Evento::find($id);
        $evento->delete();
        return redirect()->action([EventoController::class, 'index']);
    }
}
