@extends('layout')

@section('content')

<div class="card">
    <h2>Tableau de bord</h2>

    <p>Bienvenue <strong>{{ session('user')->login }}</strong> 👋</p>

    <div style="margin-top:20px;">

        <a href="/comptes" class="btn btn-primary" style="margin-bottom:10px; display:block; text-align:center;">
            📘 Liste des comptes
        </a>

        @if(session('user')->role === 'admin')
            <a href="/comptes/create" class="btn btn-outline" style="margin-bottom:10px; display:block; text-align:center;">
                ➕ Ajouter un compte
            </a>

            <a href="/ajout-utilisateur" class="btn btn-outline" style="margin-bottom:10px; display:block; text-align:center;">
                👤 Ajouter un utilisateur
            </a>
        @endif

    </div>

</div>

@endsection
