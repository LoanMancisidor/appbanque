<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - App Banque</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="card" style="max-width:450px; margin:auto; margin-top:50px;">
        <h2>Connexion</h2>

        {{-- Message d'erreur --}}
        @if(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <form action="/login" method="POST">
            @csrf

            <label>Login</label>
            <input type="text" name="login" required>

            <label>Mot de passe</label>
            <input type="password" name="mdp" required>

            <button class="btn btn-primary" style="margin-top: 15px; width:100%;">
                Se connecter
            </button>
        </form>
    </div>
</div>

</body>
</html>
