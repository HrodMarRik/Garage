@include('partiels.header')

<div class="container">
    <h2>Créer un nouveau contrat</h2>
    <form action="{{ route('contrats.store') }}" method="POST">
        @csrf
        <table class="table table-hover">
            <tr>
                <th><label for="status" class="form-label">Status:</label></th>
                <td><input type="text" id="status" name="status" class="form-control" required></td>
            </tr>
            <tr>
                <th><label for="structure" class="form-label">Structure:</label></th>
                <td><input type="text" id="structure" name="structure" class="form-control" required></td>
            </tr>
            <tr>
                <th>Action:</th>
                <td><button type="submit" class="btn btn-block">Créer</button></td>
            </tr>
        </table>
    </form>
    <a class="btn" href="{{ route('contrats.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
