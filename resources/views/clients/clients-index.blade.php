@include('partiels.header')
<div class="container">
        <a href="{{ Route('garages.create') }}" class="btn">nouveau</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>nom</th>
                <th>statut</th>
                <th>Telephone</th>
                <th>mail</th>
                <th>info</th>
                <th>action</th>
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
                            <a class="btn"  href=" {{ Route('garages.show',[$client->id]) }} ">afficher</a>
                            <a class="btn"  href=" {{ Route('garages.edit') }} ">modifier</a>
                            <a class="btn"  href=" {{ Route('garages.delete') }} ">supprimer</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@include('partiels.footer')