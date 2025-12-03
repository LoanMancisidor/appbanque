<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compte;
use App\Models\Operation;
use Illuminate\Support\Facades\DB;

class CompteController extends Controller
{
    public function index()
    {
        $user = session('user');
        if (!$user) return redirect('/');

        $comptes = Compte::all();
        return view('comptes', compact('comptes'));
    }

    public function showOperations($id)
    {
        $user = session('user');
        if (!$user) return redirect('/');

        $compte = Compte::findOrFail($id);
        $operations = $compte->operations;

        return view('operations', compact('compte', 'operations'));
    }

    public function depot($id, Request $request)
    {
        $compte = Compte::findOrFail($id);

        // Appel procédure stockée
        DB::statement('CALL sp_depot(?, ?)', [$id, $request->montant]);

        return back();
    }

    public function retrait($id, Request $request)
    {
        DB::beginTransaction();

        try {
            $compte = Compte::findOrFail($id);

            if ($compte->solde < $request->montant) {
                throw new \Exception("Solde insuffisant");
            }

            // Mise à jour du solde côté code
            $compte->solde -= $request->montant;
            $compte->save();

            // Insertion dans Operation
            Operation::create([
                'compte_id' => $id,
                'type_op'   => 'WITHDRAW',
                'montant'   => $request->montant,
                'date_op'   => now(),
            ]);

            DB::commit();

        } catch (\Exception $e) {
            DB::rollBack();
        }

        return back();
    }

    public function create()
    {
        $user = session('user');
        if (!$user || $user->role !== 'admin') return redirect('/dashboard');

        return view('add_compte');
    }

    public function store(Request $request)
    {
        $user = session('user');
        if (!$user || $user->role !== 'admin') return redirect('/dashboard');

        Compte::create([
            'numero_compte' => $request->numero_compte,
            'solde' => $request->solde,
        ]);

        return redirect('/comptes');
    }
}
