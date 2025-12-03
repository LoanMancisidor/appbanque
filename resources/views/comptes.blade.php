<!DOCTYPE html>
<html>
<head>
    <title>Liste des comptes</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Liste des comptes</h1>

<table border="1">
    <tr>
        <th>Numéro</th>
        <th>Solde</th>
        <th>Actions</th>
    </tr>

    @foreach($comptes as $compte)
        <tr>
            <td>{{ $compte->numero_compte }}</td>
            <td>{{ $compte->solde }} €</td>
            <td>
                <a href="/compte/{{ $compte->id }}/operations">Voir opérations</a>
            </td>
        </tr>
    @endforeach

</table>

<br>
<a href="/dashboard">Retour</a>

</body>
</html>
