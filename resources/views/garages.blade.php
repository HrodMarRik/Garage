
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mes Garages</title>
</head>
<body>

<table class="table table-hover">
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
        @foreach ($garages as $garage)
        <tr>
                <td>{{ $garage->id }}</td>
                <td>{{ $garage->adresse }}</td>
                <td>{{ $garage->montant_charges }}</td>
                <td>{{ $garage->prix_particulier }}</td>
                <td>{{ $garage->prix_entreprise }}</td>
                <td>{{ $garage->remboursement_emprunt_mois }}</td>
                <td>{{ $garage->date_achat }}</td>
                <td>{{ $garage->date_fin_remboursement_emprunt }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>

@foreach($garages as $garage)
    {{ $garage }}<br>
    @foreach($garage as $key => $value)
        {{ $value }}<br>
        {{ $key }}<br>

    @endforeach
@endforeach
