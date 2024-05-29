<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Garage;

class GaragesController extends Controller
{
    public function index(): View {
        $garages = Garage::all();
        return view('pages.garages', [
            'garages' => $garages,
        ]);
    }
}
