<?php

namespace App\Http\Controllers;

use App\Models\Garage;
use Illuminate\Http\Request;

class GaragesController extends Controller
{
    public function index()
    {
        $garages = Garage::all();
        return view('garages.garages-index', compact('garages'));
    }

    public function show($id)
    {
        $garage = Garage::findOrFail($id);
        return view('garages.garages-show', compact('garage'));
    }

    public function create()
    {
        return view('garages.garages-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'adresse' => 'required|string|max:255',
            'charges' => 'required|numeric',
            'prix_particulier' => 'required|numeric',
            'prix_entreprise' => 'required|numeric',
            'remboursement_emprunt_mois' => 'nullable|numeric',
            'date_achat' => 'required|date',
            'date_fin_remboursement_emprunt' => 'nullable|date',
        ]);

        Garage::create($data);
        return redirect()->route('garages.index');
    }

    public function edit($id)
    {
        $garage = Garage::findOrFail($id);
        return view('garages.garages-edit', compact('garage'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'adresse' => 'required|string|max:255',
            'montant_charges' => 'required|numeric',
            'prix_particulier' => 'required|numeric',
            'prix_entreprise' => 'required|numeric',
            'remboursement_emprunt_mois' => 'nullable|numeric',
            'date_achat' => 'required|date',
            'date_fin_remboursement_emprunt' => 'nullable|date',
        ]);

        $garage = Garage::findOrFail($id);
        $garage->update($data);
        return redirect()->route('garages.index');
    }

    public function destroy($id)
    {
        $garage = Garage::findOrFail($id);
        $garage->delete();
        return redirect()->route('garages.index');
    }
}
