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
                <td><a class="btn" href="{{ route('clients.edit', $client->id) }}">Modifier</a></td>
            </tr>
        </tbody>
    </table>
    <div class="container">


        <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn-danger">Supprimer</button>
        </form>
    </div>
    <a class="btn" href="{{ route('clients.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
