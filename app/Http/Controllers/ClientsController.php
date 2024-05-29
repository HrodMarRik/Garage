<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientsController extends Controller
{
    // menu clients
    public function show(): View {
        $clients = Client::all();
        return view('pages.clients', [
            'clients' => $clients,
        ]);
    }
    public function create(): View {
        $clients = Client::all();
        return view('pages.clients', [
            'clients' => $clients,
        ]);
    }
    public function read(): View {
        $clients = Client::all();
        return view('pages.clients', [
            'clients' => $clients,
        ]);
    }
    public function update(): View {
        $clients = Client::all();
        return view('pages.clients', [
            'clients' => $clients,
        ]);
    }
    public function delete(): View {
        $clients = Client::all();
        return view('pages.clients', [
            'clients' => $clients,
        ]);
    }
}
