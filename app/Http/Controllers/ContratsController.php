<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Contrat;

class ContratsController extends Controller
{
    public function show(): View {
        // aller chercher le dico garages
        $contrats = Contrat::all();
        return view('pages.contrats', [
            'contrats' => $contrats,
        ]);
    }
}
