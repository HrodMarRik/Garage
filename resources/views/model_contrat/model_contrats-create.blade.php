@include('partiels.header')

<div class="container">
    <h2>Créer un nouveau model de contrat</h2>
    <form action="{{ route('model_contrats.store') }}" method="POST">
        @csrf
        <table class="table table-hover">
            <tr>
                <th><label for="name"  class="form-label"> name :</label></th>
                <td><input type="text" name="name" class="form-control" required></td>
            </tr>
            <tr>
                <th><label for="status"  class="form-label"> status :</label></th>
                <td>
                    <select name="status" class="form-control" required>
                        <option value="pending">En attente</option>
                        <option value="active">Actif</option>
                        <option value="completed">Terminé</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th><label for="structure"  class="form-label"> structure :</label></th>
                <td><input type="text" name="structure" class="form-control" required></td>
            </tr>
        </table>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>

@include('partiels.footer')
