@include('partiels.header')

<div class="container">
    <h2>Modifier le contrat</h2>
    <form action="{{ route('model_contrats.update', $contrat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table class="table table-hover">
            <tr>
                <th><label for="status" class="form-label">Status:</label></th>
                <td><input type="text" id="status" name="status" class="form-control" value="{{ $contrat->status }}" required></td>
            </tr>
            <tr>
                <th><label for="structure" class="form-label">Structure:</label></th>
                <td><input type="text" id="structure" name="structure" class="form-control" value="{{ $contrat->structure }}" required></td>
            </tr>
            <tr>
                <th>Action:</th>
                <td><button type="submit" class="btn btn-block">Enregistrer les modifications</button></td>
            </tr>
        </table>
    </form>
    <a class="btn" href="{{ route('contrats.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
