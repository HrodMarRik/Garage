@include('partiels.header')
<div class="container">
    <a href="{{ route('contrats.create') }}" class="btn btn-block">
        <h2>Créer un nouveau contrat</h2>
    </a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Garage</th>
                <th>Status</th>
                <th>Structure</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contrats as $contrat)
                <tr>
                    <td>{{ $contrat->id }}</td>
                    <td>{{ $contrat->client->name }}</td>
                    <td>{{ $contrat->garage ? $contrat->garage->adresse : 'Supprimé' }}</td>
                    <td>{{ $contrat->status }}</td>
                    <td>{{ $contrat->structure }}</td>
                    <td>
                        <div>
                            <a class="btn btn-block" href="{{ route('contrats.show', $contrat->id) }}">Afficher</a>
                            <a class="btn btn-block" href="{{ route('contrats.edit', $contrat->id) }}">Modifier</a>
                            <form action="{{ route('contrats.destroy', $contrat->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-block btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partiels.footer')
