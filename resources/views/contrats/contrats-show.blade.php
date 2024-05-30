@include('partiels.header')

<div class="container"><h2>Détails du client</h2></div>
<div class="container">
    <table class="table table-hover">
        <tbody>
            @foreach ($contrat->toArray() as $key => $value)
                <tr>
                    <th>{{ $key }}</th>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
            <tr>
                <th>action</th>
                <td>
                    <a class="btn btn-block" href="{{ route('contrats.edit', $contrat->id) }}">Modifier</a>
                    <form action="{{ route('contrats.destroy', $contrat->id) }}" method="POST" style="display:inline;">
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
