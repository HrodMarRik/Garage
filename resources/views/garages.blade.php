
<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mes Garages</title>
</head>
<body>

<<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>adresse</th>
            <th>Charges en €</th>
            <th>Prix Particulier</th>
            <th>Prix Entreprise</th>
            <th>Remboursement/Mois</th>
            <th>Date achat</th>
            <th>Date fin Prêt</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach ($garages as $garage)
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            @endforeach
        </tr>
    </tbody>
</table>

</body>
</html>

