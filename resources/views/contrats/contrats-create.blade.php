@include('partiels.header')

<div class="container">
    <h2>Modifier le contrat</h2>
    <form action="{{ route('contrats.update', $contrat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table class="table table-hover">
            <tr>
                <th><label for="id_client" class="form-label">Client:</label></th>
                <td>
                    <select id="id_client" name="id_client" class="form-control" required>
                        @foreach($clients as $client)
                            <option {{ $contrat->id_client == $client->id ? 'selected' : '' }}>
                                {{ $client->name }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <th><label for="id_garage" class="form-label">Garage:</label></th>
                <td>
                    <select id="id_garage" name="id_garage" class="form-control" required>
                        @foreach($garages as $garage)
                            <option {{ $contrat->id_garage == $garage->id ? 'selected' : '' }}>
                                {{ $garage->adresse }}
                            </option>
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
                <th><label for="status" class="form-label">Statut:</label></th>
                <td><input type="text" id="status" name="status" class="form-control" required></td>
            </tr>

            <tr>
                <th><label for="structure" class="form-label">Structure:</label></th>
                <td><input type="text" id="structure" name="structure" class="form-control"required></td>
            </tr>

            <tr>
                <th>Action:</th>
                <td><button class="btn btn-block" type="submit">Enregistrer les modifications</button></td>
            </tr>
        </table>
    </form>

    <a class="btn btn-block" href="{{ route('contrats.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
