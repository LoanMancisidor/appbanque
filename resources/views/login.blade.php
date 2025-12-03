<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Connexion</h1>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <label>Login :</label>
        <input type="text" name="login" required><br><br>

        <label>Mot de passe :</label>
        <input type="password" name="mdp" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
