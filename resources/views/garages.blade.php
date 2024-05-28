
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mes Garages</title>
</head>
<body>

<table class="table table-hover" style="text-align: center;">
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
            <th>modifier</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($garages as $garage)
            <tr>
                @foreach ($garage->toArray() as $key => $value)
                    @if ($key !== 'updated_at' && $key !== 'created_at')
                        <td>{{ $value }}</td>
                    @endif
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>

