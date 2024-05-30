<?php

namespace App\Http\Controllers;

use App\Models\Modelcontrat;
use Illuminate\Http\Request;

class Model_contratsController extends Controller
{
    public function index()
    {
        $contrats = Modelcontrat::all();
        return view('model_contrat.model_contrats-index', compact('contrats'));
    }

    public function show($id)
    {
        $contrat = Modelcontrat::findOrFail($id);
        return view('model_contrat.model_contrats-show', compact('contrat'));
    }

    public function create()
    {
        return view('model_contrat.model_contrats-create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'status' => 'required|string',
            'structure' => 'required|string',
        ]);

        Modelcontrat::create($data);
        return redirect()->route('model_contrat.model_contrats-index');
    }

    public function edit($id)
    {
        $contrat = Modelcontrat::findOrFail($id);
        return view('model_contrat.model_contrats-edit', compact('contrat'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'status' => 'required|string',
            'structure' => 'required|string',
        ]);

        $contrat = Modelcontrat::findOrFail($id);
        $contrat->update($data);
        return redirect()->route('model_contrat.model_contrats-index');
    }

    public function destroy($id)
    {
        $contrat = Modelcontrat::findOrFail($id);
        $contrat->delete();
        return redirect()->route('model_contrat.model_contrats-index');
    }
}
