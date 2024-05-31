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
                <th><label for="name">name</label></th>
                <td>
                    <input type="text" name="name" id="name" class="form-control" value="{{ $client->name }}" required>
                    @error('name')
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
                <th><label for="phone_number">Téléphone</label></th>
                <td>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $client->phone_number }}" required>
                    @error('phone_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="mail">mail</label></th>
                <td>
                    <input type="mail" name="mail" id="mail" class="form-control" value="{{ $client->mail }}" required>
                    @error('mail')
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
