<!DOCTYPE html>
<html>
<head>
    <title>Opérations</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Opérations du compte n° {{ $compte->numero_compte }}</h1>

<h3>Faire un dépôt</h3>
<form method="POST" action="/compte/{{ $compte->id }}/depot">
    @csrf
    <input type="number" step="0.01" name="montant" required>
    <button>Déposer</button>
</form>

<h3>Faire un retrait</h3>
<form method="POST" action="/compte/{{ $compte->id }}/retrait">
    @csrf
    <input type="number" step="0.01" name="montant" required>
    <button>Retirer</button>
</form>

<h2>Historique des opérations</h2>

<table border="1">
    <tr>
        <th>Type</th>
        <th>Montant</th>
        <th>Date</th>
    </tr>

    @foreach($operations as $op)
        <tr>
            <td>{{ $op->type_op }}</td>
            <td>{{ $op->montant }} €</td>
            <td>{{ $op->date_op }}</td>
        </tr>
    @endforeach
</table>

<br>
<a href="/comptes">Retour aux comptes</a>

</body>
</html>
