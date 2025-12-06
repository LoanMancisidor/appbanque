@extends('layout')

@section('content')

<div class="card" style="max-width:600px; margin:auto;">
    <h2>Ajouter un compte</h2>

    <form action="/comptes/create" method="POST">
        @csrf

        <label>Numéro du compte</label>
        <input type="text" name="numero_compte" required>

        <label>Solde initial (€)</label>
        <input type="number" step="0.01" name="solde" required>

        <button class="btn btn-primary" style="margin-top: 10px;">Créer le compte</button>
    </form>

</div>

@endsection
