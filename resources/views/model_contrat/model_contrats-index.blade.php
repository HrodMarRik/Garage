@include('partiels.header')

<div class="container">
    <a href="{{ route('model_contrats.create') }}" class="btn btn-block">
        <h2>Créer un nouveau model de contrat</h2>
    </a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>Status</th>
                <th>Structure</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contrats as $contrat)
                <tr>
                    <td>{{ $contrat->id }}</td>
                    <td>{{ $contrat->name }}</td>
                    <td>{{ $contrat->status }}</td>
                    <td>{{ $contrat->structure }}</td>
                    <td>
                        <a class="btn btn-block" href="{{ route('model_contrats.show', $contrat->id) }}">Afficher</a>
                        <a class="btn btn-block" href="{{ route('model_contrats.edit', $contrat->id) }}">Modifier</a>
                        <form action="{{ route('model_contrats.destroy', $contrat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-block btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partiels.footer')
