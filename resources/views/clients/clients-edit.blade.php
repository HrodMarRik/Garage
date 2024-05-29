@include('partiels.header')

<div class="container">
    <h2>Modifier le client</h2>
</div>
<div class="container">
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')

        <tr>
            <th><label for="nom">Nom</label></th>
            <td><input type="text" name="nom" id="nom" class="form-control" value="{{ $client->nom }}" required></td>
        </tr>

        <tr>
            <th><label for="statut">Statut</label></th>
            <td><select name="statut" id="statut" class="form-control" required>
                <option value="entreprise" {{ $client->statut == 'entreprise' ? 'selected' : '' }}>Entreprise</option>
                <option value="particulier" {{ $client->statut == 'particulier' ? 'selected' : '' }}>Particulier</option>
            </select></td>
        </tr>

        <tr>
            <th><label for="telephone">Téléphone</label></th>
            <td><input type="text" name="telephone" id="telephone" class="form-control" value="{{ $client->telephone }}" required></td>
        </tr>

        <tr>
            <th><label for="email">Email</label>
            <td><input type="email" name="email" id="email" class="form-control" value="{{ $client->email }}" required>
        </tr>

        <tr>
            <th><label for="info">Informations</label>
            <td><textarea name="info" id="info" class="form-control" required>{{ $client->info }}</textarea>
        </tr>
        <tr>
            <th>Action</th>
            <td><button type="submit" class="btn">Enregistrer les modifications</button></td>
        </tr>
    </form>

    <a class="btn btn-block" href="{{ route('clients.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
