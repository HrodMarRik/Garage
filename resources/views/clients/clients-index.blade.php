@include('partiels.header')
<div class="container">

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
                        <a class="btn"  href="#">afficher</a>
                        <a class="btn"  href="#">modifier</a>
                        <a class="btn"  href="#">supprimer</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@include('partiels.footer')
