@include('partiels.header')
<div class="container">

    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>id client</th>
                <th>id garages</th>
                <th>status</th>
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
                    <td><a class="btn" href="#">modifier</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@include('partiels.footer')
