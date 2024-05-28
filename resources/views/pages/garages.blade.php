@include('../partiels/header')
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
                <td><a href="#">modifier</a></td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>

