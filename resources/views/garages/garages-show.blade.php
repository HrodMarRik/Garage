@include('partiels.header')

<div class="container"><h2>Détails du garage</h2></div>
<div class="container">
    <table class="table table-hover">
        <tbody>
            @foreach ($garage->toArray() as $key => $value)
                <tr>
                    <th>{{ $key }}</th>
                    <td>{{ $value }}</td>
                </tr>
            @endforeach
            <tr>
                <th>action</th>
                <td>
                    <a class="btn btn-block" href="{{ route('garages.edit', $garage->id) }}">Modifier</a>
                    <form action="{{ route('garages.destroy', $garage->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-danger btn-block">Supprimer</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-block" href="{{ route('garages.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
