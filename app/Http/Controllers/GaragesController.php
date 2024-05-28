<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class GaragesController extends Controller
{
    public function show(Request $request): View {
        // aller chercher le dico garages
        $garages = "en construction";
        $info = ;
        return view('garages', [
            'garages' => $garages,
            'request' => $request,
            'info' => $info
        ]);
    }
}
