<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiagramController extends Controller
{
    
    // L'action de la route "diagram"
    public function diagram () {

        $data = collect(); // Les données du diagramme

        // La vue "diagram"
        return view("dashboard", compact('data'));
    }
}
