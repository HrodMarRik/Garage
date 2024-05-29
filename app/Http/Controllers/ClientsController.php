<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    public function show(): View {
        // aller chercher le dico garages
        $clients = Client::all();
        return view('pages.clients', [
            'clients' => $clients,
        ]);
    }
}
