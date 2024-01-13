<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingArtechController extends Controller
{
    public function index() {
        return view('landing.apresiasi.artech');
    }
}
