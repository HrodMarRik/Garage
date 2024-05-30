@include('partiels.header')

<div class="container"><h2>Liste des contrats</h2></div>
<div class="container">
    <a href="{{ route('contrats.create') }}" class="btn btn-block">Créer un nouveau contrat</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Status</th>
                <th>Structure</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contrats as $contrat)
                <tr>
                    <td>{{ $contrat->id }}</td>
                    <td>{{ $contrat->status }}</td>
                    <td>{{ $contrat->structure }}</td>
                    <td>
                        <a class="btn" href="{{ route('contrats.show', $contrat->id) }}">Afficher</a>
                        <a class="btn" href="{{ route('contrats.edit', $contrat->id) }}">Modifier</a>
                        <form action="{{ route('contrats.destroy', $contrat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partiels.footer')
