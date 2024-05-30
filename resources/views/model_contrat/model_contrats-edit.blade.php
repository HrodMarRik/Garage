@include('partiels.header')
<div class="container">
    <h2>Modifier le modèle de contrat</h2>
</div>
<div class="container">
    <form action="{{ route('model_contrats.update', $contrat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table class="table table-hover">
            <tr>
                <th><label for="name" class="form-label">Nom:</label></th>
                <td>
                    <input type="text" id="name" name="name" class="form-control" value="{{ $contrat->name }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th><label for="status" class="form-label">Statut:</label></th>
                <td>
                    <input type="text" id="status" name="status" class="form-control" value="{{ $contrat->status }}" required>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th><label for="structure" class="form-label">Structure:</label></th>
                <td>
                    <input type="text" id="structure" name="structure" class="form-control" value="{{ $contrat->structure }}" required>
                    @error('structure')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
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
