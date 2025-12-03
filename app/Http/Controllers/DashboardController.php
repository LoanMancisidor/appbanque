<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $utilisateurs = session('user');

        if (!$utilisateurs) {
            return redirect('/');
        }

        return view('dashboard', compact('utilisateurs'));
    }
}
