@include('partiels.header')

<div class="container">
    <h2>Modifier le client</h2>
    <form action="{{ route('clients.update', $client->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ $client->nom }}" required>
        </div>
        <div class="form-group">
            <label for="statut">Statut</label>
            <select name="statut" id="statut" class="form-control" required>
                <option value="entreprise" {{ $client->statut == 'entreprise' ? 'selected' : '' }}>Entreprise</option>
                <option value="particulier" {{ $client->statut == 'particulier' ? 'selected' : '' }}>Particulier</option>
            </select>
        </div>
        <div class="form-group">
            <label for="telephone">Téléphone</label>
            <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $client->telephone }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $client->email }}" required>
        </div>
        <div class="form-group">
            <label for="info">Informations</label>
            <textarea name="info" id="info" class="form-control" required>{{ $client->info }}</textarea>
        </div>
        <button type="submit" class="btn">Enregistrer les modifications</button>
    </form>
    <a class="btn" href="{{ route('clients.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
