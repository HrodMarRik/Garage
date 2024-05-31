@include('partiels.header')

<div class="container">
    <h2>Créer un nouveau client</h2>
</div>
<div class="container">
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <table class="table table-hover">

            <tr>
                <th><label for="name">name</label></th>
                <td>
                    <input type="text" name="name" id="name" class="form-control" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="statut">statut</label></th>
                <td>
                    <select name="statut" id="statut" class="form-control" required>
                        <option>Entreprise</option>
                        <option>Particulier</option>
                    </select>
                    @error('statut')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="phone_number">Téléphone</label></th>
                <td>
                    <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                    @error('phone_number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="mail">mail</label></th>
                <td>
                    <input type="mail" name="mail" id="mail" class="form-control" required>
                    @error('mail')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>

            <tr>
                <th><label for="info">Informations</label></th>
                <td>
                    <textarea rows="5" name="info" id="info" class="form-control" required></textarea>
                    @error('info')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </td>
            </tr>
            <tr>
                <th>Action</th>
                <td><button type="submit" class="btn btn-block">Créer le client</button></td>
            </tr>
        </table>
        <a class="btn btn-block" href="{{ route('clients.index') }}">Retour à la liste</a>
    </form>
</div>

@include('partiels.footer')
