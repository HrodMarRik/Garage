@include('partiels.header')

<div class="container">
    <h2>Créer un nouveau client</h2>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <table class="table table-hover">
            <tr>
                <th><label for="name" class="form-label">Nom:</label></th>
                <td><input type="text" id="name" name="name" class="form-control" required></td>
            </tr>

            <tr>
                <th><label for="statut" class="form-label">Statut:</label></th>
                <td><select id="statut" name="statut" class="form-control" required>
                        <option value="entreprise">Entreprise</option>
                        <option value="particulier">Particulier</option>
                    </select>
                </td>
            </tr>

            <tr>
                <th><label for="telephone" class="form-label">Téléphone:</label></th>
                <td><input type="text" id="telephone" name="telephone" class="form-control" required></td>
            </tr>

            <tr>
                <th><label for="email" class="form-label">Email:</label></th>
                <td><input type="email" id="email" name="email" class="form-control" required></td>
            </tr>

            <tr>
                <th><label for="info" class="form-label">Info:</label></th>
                <td><textarea id="info" name="info" class="form-control" rows="3" required></textarea></td>
            </tr>
            <tr>
                <th>Action:</th>
                <td><a class="btn"><button class="btn" type="submit">Créer</button></a></td>
            </tr>
        </table>
    </form>
</div>

@include('partiels.footer')
