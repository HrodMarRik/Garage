@include('partiels.header')

<div class="container">
    <h2>Créer un nouveau contrat</h2>
    <form action="{{ route('contrats.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="status">Status :</label>
            <select name="status" id="status" class="form-control" required>
                <option value="pending">En attente</option>
                <option value="active">Actif</option>
                <option value="completed">Terminé</option>
            </select>
        </div>
        <div class="form-group">
            <label for="structure">Structure :</label>
            <input type="text" name="structure" id="structure" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>

@include('partiels.footer')
