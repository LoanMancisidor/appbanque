<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un compte</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Créer un compte</h1>

<form method="POST" action="/ajout-compte">
    @csrf

    <label>Numéro de compte</label>
    <input type="text" name="numero_compte" required><br><br>

    <label>Solde initial</label>
    <input type="number" name="solde" step="0.01" required><br><br>

    <button>Créer</button>
</form>

<br>
<a href="/dashboard">Retour</a>

</body>
</html>
