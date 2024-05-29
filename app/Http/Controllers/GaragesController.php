<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Garage;

class GaragesController extends Controller
{
    public function show(): View {
        // aller chercher le dico garages
        $garages = Garage::all();
        return view('pages.garages', [
            'garages' => $garages,
        ]);
    }
    public function read(): View {
        $clients = Client::all();
        return view('pages.clients', [
            'clients' => $clients,
        ]);
    }
    public function edit(): View {
        $clients = Client::all();
        return view('pages.clients', [
            'clients' => $clients,
        ]);
    }
}
