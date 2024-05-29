@include('partiels.header')
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
                <td><a href="#">modifier</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@include('partiels.footer')
