<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Modelcontrat;
use App\Models\Client;
use App\Models\Garage;
use Illuminate\Http\Request;

class ContratsController extends Controller
{
    public function index()
    {
        $contrats = Contrat::all();
        return view('contrats.contrats-index', compact('contrats'));
    }

    public function show($id)
    {
        $contrat = Contrat::findOrFail($id);
        return view('contrats.contrats-show', compact('contrat'));
    }

    public function create()
    {
        $clients = Client::all();
        $garages = Garage::all();
        $modelContrats = Modelcontrat::all();
        return view('contrats.contrats-create', compact('clients', 'garages', 'modelContrats'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'id_client' => 'required|integer|exists:clients,id',
            'id_garage' => 'required|integer|exists:garages,id',
            'status' => 'required|string',
            'structure' => 'required|string',
        ]);

        Contrat::create($data);
        return redirect()->route('contrats.index');
    }

    public function edit($id)
    {
        $contrat = Contrat::findOrFail($id);
        $clients = Client::all();
        $garages = Garage::all();
        return view('contrats.contrats-edit', compact('contrat', 'clients', 'garages'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'id_client' => 'required|integer|exists:clients,id',
            'id_garage' => 'required|integer|exists:garages,id',
            'status' => 'required|string',
            'structure' => 'required|string',
        ]);

        $contrat = Contrat::findOrFail($id);
        $contrat->update($data);
        return redirect()->route('contrats.index');
    }

    public function destroy($id)
    {
        $contrat = Contrat::findOrFail($id);
        $contrat->delete();
        return redirect()->route('contrats.index');
    }
}
