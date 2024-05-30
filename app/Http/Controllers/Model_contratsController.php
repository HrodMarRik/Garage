<?php

namespace App\Http\Controllers;

use App\Models\model_contrat;
use Illuminate\Http\Request;

class ModelContratController extends Controller
{
    public function index()
    {
        $contrats = model_contrat::all();
        return view('contrats.index', compact('contrats'));
    }

    public function show($id)
    {
        $contrat = model_contrat::findOrFail($id);
        return view('contrats.show', compact('contrat'));
    }

    public function create()
    {
        return view('contrats.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'status' => 'required|string',
            'structure' => 'required|string',
        ]);

        model_contrat::create($data);
        return redirect()->route('contrats.index');
    }

    public function edit($id)
    {
        $contrat = model_contrat::findOrFail($id);
        return view('contrats.edit', compact('contrat'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'status' => 'required|string',
            'structure' => 'required|string',
        ]);

        $contrat = model_contrat::findOrFail($id);
        $contrat->update($data);
        return redirect()->route('contrats.index');
    }

    public function destroy($id)
    {
        $contrat = model_contrat::findOrFail($id);
        $contrat->delete();
        return redirect()->route('contrats.index');
    }
}
