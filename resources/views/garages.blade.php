
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mes Garages</title>
</head>
<body>

<table class="table table-hover">
    <thead>
        <tr>
            @foreach ($garages->first()->toArray() as $key => $value)
                @if ($key !== 'updated_at' && $key !== 'created_at')
                    <th>{{ $key }}</th>
                @endif
            @endforeach
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
            </tr>
        @endforeach
    </tbody>
</table>



</body>
</html>

@foreach($garages as $garage)
    {{ $garage }}<br>
    @foreach($garage as $key => $value)
        {{ $value }}<br>
        {{ $key }}<br>

    @endforeach
@endforeach
