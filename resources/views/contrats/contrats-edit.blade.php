@include('partiels.header')

<div class="container">
    <h2>Modifier le contrat</h2>
</div>
<div class="container">
    <form action="{{ route('contrats.update', $contrat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <table class="table table-hover">
            <tr>
                <th><label for="id_client" class="form-label">Client:</label></th>
                <td>
                    <select id="id_client" name="id_client" class="form-control" required>
                        @foreach($clients as $client)
                            <option value="{{ $client->id }}" {{ $contrat->id_client == $client->id ? 'selected' : '' }}>
                                {{ $client->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_client')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="id_garage" class="form-label">Garage:</label></th>
                <td>
                    <select id="id_garage" name="id_garage" class="form-control" required>
                        @foreach($garages as $garage)
                            <option value="{{ $garage->id }}" {{ $contrat->id_garage == $garage->id ? 'selected' : '' }}>
                                {{ $garage->adresse }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_garage')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="status" class="form-label">status:</label></th>
                <td>
                    <select id="status" name="status" class="form-control" required>
                        <option>inactive</option>
                        <option>active</option>
                        <option>pause</option>
                        <option>delete</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="structure" class="form-label">Structure:</label></th>
                <td>
                    <select id="structure" name="structure" class="form-control" required>
                        @foreach($modelContrats as $model_contrat)
                            <option value="{{ $model_contrat->structure }}" {{ $contrat->structure == $model_contrat->structure ? 'selected' : '' }}>
                                {{ $model_contrat->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('structure')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th>Action:</th>
                <td><button class="btn btn-block" type="submit">Enregistrer les modifications</button></td>
            </tr>
        </table>
    </form>

    <a class="btn btn-block" href="{{ route('contrats.index') }}">Retour à la liste</a>
</div>

@include('partiels.footer')
