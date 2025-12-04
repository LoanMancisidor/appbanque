@extends('layout')

@section('content')

<div class="card">
    <h2>Ajouter un utilisateur</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                • {{ $error }} <br>
            @endforeach
        </div>
    @endif

    <form action="/utilisateurs/add" method="POST">
        @csrf

        <label>Login</label>
        <input type="text" name="login" required>

        <label>Mot de passe</label>
        <input type="password" name="mot_de_passe" required>

        <label>Rôle</label>
        <select name="role" required>
            <option value="agent">Agent</option>
            <option value="admin">Admin</option>
        </select>

        <button class="btn btn-primary" style="margin-top: 10px;">Créer l'utilisateur</button>
    </form>
</div>

@endsection
