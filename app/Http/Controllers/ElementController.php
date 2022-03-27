<?php

namespace App\Http\Controllers;

use App\Models\Commune;
use Illuminate\Http\Request;
use App\Models\Departement;
use App\Models\Region;
use App\Models\Pays;
use App\Models\Siege;

class ElementController extends Controller
{
    public function index(){
        $sieges = Siege::all();
        return view('element.index', compact('sieges'));
    }

    public function create(){
        $regions = Region::all();
        $pays = Pays::all();
        $departements = Departement::all();
        $communes = Commune::all();
        return view('element.create', compact('regions', 'pays', 'departements', 'communes'));
    }

    public function store(Request $request){
        //dd($_POST);
        $siege = new Siege();
        $siege->nomSiege = $request->nomSiege;
        $siege->commune_id = $request->commune_id;
        $siege->save();
        return redirect(route('index'));
    }
}
