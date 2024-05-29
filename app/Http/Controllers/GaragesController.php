<?php

namespace App\Http\Controllers;

use App\Models\Garage;
use Illuminate\Http\Request;

class GaragesController extends Controller
{
    public function index()
    {
        $garages = Garage::all();
        return view('garages.index', compact('garages'));
    }

    public function show($id)
    {
        $garage = Garage::findOrFail($id);
        return view('garages.show', compact('garage'));
    }

    public function create()
    {
        return view('garages.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'address' => 'required|string|max:255',
            'charges' => 'required|numeric',
            'price_particulier' => 'required|numeric',
            'price_entreprise' => 'required|numeric',
            'monthly_repayment' => 'nullable|numeric',
            'purchase_date' => 'required|date',
            'loan_end_date' => 'nullable|date',
        ]);

        Garage::create($data);
        return redirect()->route('garages.index');
    }

    public function edit($id)
    {
        $garage = Garage::findOrFail($id);
        return view('garages.edit', compact('garage'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'address' => 'required|string|max:255',
            'charges' => 'required|numeric',
            'price_particulier' => 'required|numeric',
            'price_entreprise' => 'required|numeric',
            'monthly_repayment' => 'nullable|numeric',
            'purchase_date' => 'required|date',
            'loan_end_date' => 'nullable|date',
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
