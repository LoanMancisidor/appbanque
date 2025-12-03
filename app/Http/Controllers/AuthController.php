<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = Utilisateur::where('login', $request->login)
                           ->where('mdp', $request->mdp)
                           ->first();

        if (!$user) {
            return back()->with('error', 'Login ou mot de passe incorrect');
        }

        session(['user' => $user]);

        return redirect('/dashboard');
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
