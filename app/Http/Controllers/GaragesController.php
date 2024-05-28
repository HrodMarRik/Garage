<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class GaragesController extends Controller
{
    public function show() {
        return view('garages');
    }
}
