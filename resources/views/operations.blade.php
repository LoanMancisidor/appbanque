@extends('layout')

@section('content')

<div class="card">

    {{-- Bouton retour --}}
    <a href="/comptes" class="btn btn-outline" style="margin-bottom:15px;">
        ← Retour aux comptes
    </a><br><br>

    <h2>Opérations du compte n°{{ $compte->numero_compte }}</h2>

    <p>
        <strong>Solde actuel :</strong>
        {{ number_format($compte->solde, 2, ',', ' ') }} €
    </p>

    <hr style="margin:20px 0;">


    {{-- FORM DÉPÔT --}}
    <h3>Dépôt</h3>
    <form action="/compte/{{ $compte->id }}/depot" method="POST">
        @csrf

        <label>Montant (€)</label>
        <input type="number" step="0.01" name="montant" required>

        <button class="btn btn-primary">Déposer</button>
    </form>

    <hr style="margin:20px 0;">


    {{-- FORM RETRAIT --}}
    <h3>Retrait</h3>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="/compte/{{ $compte->id }}/retrait" method="POST">
        @csrf

        <label>Montant (€)</label>
        <input type="number" step="0.01" name="montant" required>

        <button class="btn btn-outline">Retirer</button>
    </form>

    <hr style="margin:20px 0;">


    {{-- HISTORIQUE --}}
    <h3>Historique des opérations</h3>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Type</th>
                <th>Montant (€)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($operations as $op)
                <tr>
                    <td>{{ $op->date_op }}</td>
                    <td>{{ $op->type_op }}</td>
                    <td>{{ number_format($op->montant, 2, ',', ' ') }} €</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection
