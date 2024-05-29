@include('partiels.header')

<div class="container">
    <a href="{{ route('garages.create') }}" class="btn btn-block"><h2>Nouveau</h2></a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Adresse</th>
                <th>Charges</th>
                <th>Prix particulier</th>
                <th>Prix entreprise</th>
                <th>Remboursement</th>
                <th>Date achat</th>
                <th>Date fin emprunt</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($garages as $garage)
                <tr>
                    @foreach ($garage->toArray() as $key => $value)
                        @if ($key !== 'updated_at' && $key !== 'created_at')
                            <td>{{ $value }}</td>
                        @endif
                    @endforeach
                    <td>
                        <div>
                            <a class="btn" href="{{ route('garages.show', $garage->id) }}">Afficher</a>
                            <a class="btn" href="{{ route('garages.edit', $garage->id) }}">Modifier</a>
                            <form action="{{ route('garages.destroy', $garage->id) }}" method="POST" style="display:inline;">
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
