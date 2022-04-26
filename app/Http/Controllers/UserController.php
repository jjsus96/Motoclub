<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        $users = $this->users->obtenerUsers();
        return view('users.lista', ['users' => $users]);
    }

    public function create()
    {
        return view('users.crear');
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->save();
        return redirect()->action([UserController::class, 'index']);
    }

    public function show($id)
    {
        $user = $this->users->obtenerUserPorId($id);
        return view('users.ver', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = $this->users->obtenerUserPorId($id);
        return view('users.editar', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        return redirect()->action([UserController::class, 'index']);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->action([UserController::class, 'index']);
    }
}
