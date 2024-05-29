@include('partiels.header')

<div class="container">
    <h2>Créer un nouveau client</h2>

    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom:</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="statut">Statut:</label>
            <select id="statut" name="statut" class="form-control" required>
                <option value="entreprise">Entreprise</option>
                <option value="particulier">Particulier</option>
            </select>
        </div>

        <div class="form-group">
            <label for="telephone">Téléphone:</label>
            <input type="text" id="telephone" name="telephone" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="info">Info:</label>
            <textarea id="info" name="info" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn">Créer</button>
    </form>
</div>

@include('partiels.footer')
