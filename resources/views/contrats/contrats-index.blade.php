@include('partiels.header')

<div class="container">
    <a href="{{ route('contrats.create') }}" class="btn btn-block"><h2>Nouveau</h2></a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>id_client</th>
                <th>id_garage</th>
                <th>Statut</th>
                <th>structure</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contrats as $contrat)
                <tr>
                    @foreach ($contrat->toArray() as $key => $value)
                        @if ($key !== 'updated_at' && $key !== 'created_at')
                            <td>{{ $value }}</td>
                        @endif
                    @endforeach
                    <td>
                        <div>
                            <a class="btn" href="{{ route('contrats.show', $contrat->id) }}">Afficher</a>
                            <a class="btn" href="{{ route('contrats.edit', $contrat->id) }}">Modifier</a>
                            <form action="{{ route('contrats.destroy', $contrat->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partiels.footer')
