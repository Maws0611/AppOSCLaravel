<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sieges;
use App\Models\entreprises;

class EntrepriseController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth'])->only('create');
    // }



    public function index () {
        return view('entreprise.index', [
            'entreprises' => entreprises::with('localite')->get()
        ]);
    }

    public function create() {
        $sieges = sieges::all();
        return view('entreprise.create',[
            'sieges' => $sieges
        ]);
    }

    public function store(Request $request) {


        // TODO: Refactoring cette partie de code
        $inputsData = $request->all();
        $inputsData['contratFormel'] = $request->has('contratFormel') ? true : false;
        $inputsData['organigrammeClaire'] = $request->has('organigrammeClaire') ? true : false;
        $inputsData['dispositifFormation'] = $request->has('dispositifFormation') ? true : false;
        $inputsData['cotisationSocial'] = $request->has('cotisationSocial') ? true : false;

        entreprises::create($inputsData);
        return redirect()->route('entreprise.index');
    }

    public function show(entreprises  $entreprise){
        return view('entreprise.show',['entreprise' => $entreprise]);

    }
}