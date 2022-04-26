<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Socios;

class SociosController extends Controller
{
    protected $socios;

    public function __construct(Socio $socios)
    {
        $this->socios = $socios;
    }

    public function index()
    {
        $socios = $this->socios->obtenerSocios();
        return view('socios.lista', ['socios' => $socios]);
    }

    public function create()
    {
        return view('socios.crear');
    }

    public function store(Request $request)
    {
        $socio = new Socio($request->all());
        $socio->save();
        return redirect()->action([SocioController::class, 'index']);
    }

    public function show($id)
    {
        $socio = $this->socios->obtenerSocioPorId($id);
        return view('socios.ver', ['socio' => $socio]);
    }

    public function edit($id)
    {
        $socio = $this->socios->obtenerSocioPorId($id);
        return view('socios.editar', ['socio' => $socio]);
    }

    public function update(Request $request, $id)
    {
        $socio = Socio::find($id);
        $socio->fill($request->all());
        $socio->save();
        return redirect()->action([SocioController::class, 'index']);
    }

    public function destroy($id)
    {
        $socio = Socio::find($id);
        $socio->delete();
        return redirect()->action([SocioController::class, 'index']);
    }
}
