<!DOCTYPE html>
<html>
<head>
    <title>Ajouter utilisateur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Créer un utilisateur</h1>

<form method="POST" action="/ajout-utilisateur">
    @csrf

    <label>Login</label>
    <input type="text" name="login" required><br><br>

    <label>Mot de passe</label>
    <input type="password" name="mdp" required><br><br>

    <label>Rôle</label>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="agent">Agent</option>
    </select><br><br>

    <button>Créer</button>
</form>

<br>
<a href="/dashboard">Retour</a>

</body>
</html>
