@extends('layout')

@section('content')

<div class="card">
    <h2>Liste des comptes</h2>

    <a href="/comptes/create" class="btn btn-primary" style="margin-bottom:15px;">
        + Ajouter un compte
    </a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Numéro</th>
                <th>Solde (€)</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
            @foreach($comptes as $compte)
                <tr>
                    <td>{{ $compte->id }}</td>
                    <td>{{ $compte->numero_compte }}</td>
                    <td><strong>{{ number_format($compte->solde, 2, ',', ' ') }} €</strong></td>
                    <td>
                        <a class="btn btn-primary" href="/comptes/{{ $compte->id }}/operations">
                            Voir opérations
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
