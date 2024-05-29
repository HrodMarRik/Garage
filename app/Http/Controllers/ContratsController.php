<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
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
        return view('contrats.contrats-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'client_id' => 'required|integer',
            'garage_id' => 'required|integer',
            'details' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'price' => 'required|numeric',
        ]);

        Contrat::create($data);
        return redirect()->route('contrats.index');
    }

    public function edit($id)
    {
        $contrat = Contrat::findOrFail($id);
        return view('contrats.contrats-edit', compact('contrat'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'client_id' => 'required|integer',
            'garage_id' => 'required|integer',
            'details' => 'nullable|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'price' => 'required|numeric',
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
