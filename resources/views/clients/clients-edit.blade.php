@include('partiels.header')

<div class="container">
    <h2>Modifier le client</h2>
</div>
<div class="container">
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table class="table table-hover">

            <tr>
                <th><label for="nom">Nom</label></th>
                <td>
                    <input type="text" name="nom" id="nom" class="form-control" value="{{ $client->name }}" required>
                    @error('nom')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="statut">Statut</label></th>
                <td>
                    <select name="statut" id="statut" class="form-control" required>
                        <option value="entreprise" {{ $client->statut == 'entreprise' ? 'selected' : '' }}>Entreprise</option>
                        <option value="particulier" {{ $client->statut == 'particulier' ? 'selected' : '' }}>Particulier</option>
                    </select>
                    @error('statut')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="telephone">Téléphone</label></th>
                <td>
                    <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $client->phone_number }}" required>
                    @error('telephone')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="email">Email</label></th>
                <td>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $client->mail }}" required>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="info">Informations</label></th>
                <td>
                    <textarea rows="5" name="info" id="info" class="form-control" required>{{ $client->info }}</textarea>
                    @error('info')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th>Action</th>
                <td><button type="submit" class="btn btn-block">Enregistrer les modifications</button></td>
            </tr>
        </table>
    </form>

    <a class="btn btn-block" href="{{ route('clients.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
