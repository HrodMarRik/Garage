@include('partiels.header')

<div class="container">
    <h2>Détails du client</h2>
    <table class="table table-hover">
        <tbody>
            @foreach ($client->toArray() as $key => $value)
                <tr>
                    <th>{{ $key }}</th>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
            <tr>
                <th>action</th>
                <td>
                    <a class="btn btn-block" href="{{ route('clients.edit', $client->id) }}">Modifier</a>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger btn-block">Supprimer</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-block" href="{{ route('clients.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
