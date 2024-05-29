@include('partiels.header')

<div class="container">
    <h2>Détails du client</h2>
    <table class="table table-hover">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $client->id }}</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>{{ $client->name }}</td>
            </tr>
            <tr>
                <th>Statut</th>
                <td>{{ $client->statut }}</td>
            </tr>
            <tr>
                <th>Téléphone</th>
                <td>{{ $client->telephone }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $client->email }}</td>
            </tr>
            <tr>
                <th>Informations</th>
                <td>{{ $client->info }}</td>
            </tr>
        </tbody>
    </table>
    <div class="container">

        <a class="btn" href="{{ route('clients.edit', $client->id) }}">Modifier</a>
        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger">Supprimer</button>
        </form>
    </div>
    <a class="btn" href="{{ route('clients.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
