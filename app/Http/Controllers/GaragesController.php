<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Garage;

class GaragesController extends Controller
{
    public function show(Request $request): View {
        // aller chercher le dico garages
        $garages = Garage::all();
        return view('garages', [
            'garages' => $garages,
            'request' => $request,
        ]);
    }
}
