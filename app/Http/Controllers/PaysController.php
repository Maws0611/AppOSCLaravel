<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pays;
use App\Models\regions;

class PaysController extends Controller
{
    public function indexPays(){
        $pays = Pays::all();
        return view('pays.indexPays', ['pays'=>$pays]);
    }
}
