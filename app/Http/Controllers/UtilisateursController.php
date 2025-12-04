<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class UtilisateursController extends Controller
{
    public function create()
    {
        $user = session('user');
        if (!$user || $user->role !== 'admin') return redirect('/dashboard');

        return view('add_utilisateur');
    }

    public function store(Request $request)
    {
        $user = session('user');
        if (!$user || $user->role !== 'admin') return redirect('/dashboard');

        Utilisateur::create([
            'login' => $request->login,
            'mdp'   => $request->mdp,
            'role'  => $request->role,
        ]);

        return redirect('/dashboard');
    }
}
