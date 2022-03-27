<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Pays;

class RegionController extends Controller
{
    public function index(){
        $regions = Region::all();
        return view ('region.index', compact('regions'));
    }

    public function create(){
        $pays = Pays::all();
        return view('region.create', compact('pays'));
    }

    public function store(Request $request){
        // dd($_POST);
        $region = new Region;
        $region->nomRegion = $request->nomRegion;
        $region->pays_id = $request->pays_id;
        $region->save();
        return redirect(route('regions.index'));
        //return redirect(route('departements.index'));
    }
}
