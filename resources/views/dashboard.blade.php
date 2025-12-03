<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Bienvenue {{ $utilisateurs->login }} ({{ $utilisateurs->role }})</h1>

<h2>Actions disponibles</h2>

<ul>
    <li><a href="/comptes">Voir les comptes</a></li>

    @if($utilisateurs->role === 'admin')
        <li><a href="/ajout-compte">Ajouter un compte</a></li>
        <li><a href="/ajout-utilisateur">Créer un utilisateur</a></li>
    @endif
</ul>

<a href="/logout">Déconnexion</a>

</body>
</html>
