<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ContratsController extends Controller
{
    public function show() {
        return view('pages.contrats');
    }
}
