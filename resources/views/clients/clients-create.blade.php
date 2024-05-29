@include('partiels.header')

<div class="container">
    <h2>Créer un nouveau client</h2>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <table class="table table-hover">
            <tr>
                <th><label for="name">Nom:</label></th>
                <td><input type="text" id="name" name="name" class="form-control" required></td>
            </tr>

            <tr>
                <th><label for="statut">Statut:</label></th>
                <td><select id="statut" name="statut" class="form-control" required>
                        <option value="entreprise">Entreprise</option>
                        <option value="particulier">Particulier</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th><label for="telephone">Téléphone:</label></th>
                <td><input type="text" id="telephone" name="telephone" class="form-control" required></td>
            </tr>

            <tr>
                <th><label for="email">Email:</label></th>
                <td><input type="email" id="email" name="email" class="form-control" required></td>
            </tr>

            <tr>
                <th></th>
                <td></td>
            </tr>

        </table>

        <div class="form-group">



        <div class="form-group">
            <label for="info">Info:</label>
            <textarea id="info" name="info" class="form-control" rows="3" required></textarea>
        </div>

        <button type="submit" class="btn">Créer</button>
    </form>
</div>

@include('partiels.footer')
