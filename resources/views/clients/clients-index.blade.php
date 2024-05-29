@include('partiels.header')

<div class="container">
    <a href="{{ route('garages.create') }}" class="btn"><h2>Nouveau</h2></a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Statut</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Info</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    @foreach ($client->toArray() as $key => $value)
                        @if ($key !== 'updated_at' && $key !== 'created_at')
                            <td>{{ $value }}</td>
                        @endif
                    @endforeach

                    <td>
                        <div>
                            <a class="btn" href="{{ route('clients.show', [$client->id]) }}">Afficher</a>
                            <a class="btn" href="{{ route('clients.edit', [$client->id]) }}">Modifier</a>
                            <form action="{{ route('clients.destroy', [$client->id]) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partiels.footer')
