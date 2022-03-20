<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quartiers;
use App\Models\entreprises;

class EntrepriseController extends Controller
{
    public function index() {
    //     return view('entreprise.index', [
    //         'entreprises' => entreprises::with('localite')->get()
    //     ]);
    // }

    // public function create() {
    //     $quartiers = quartiers::all();
    //     return view('entreprise.create',[
    //         'quartiers' => $quartiers
    //     ]);
    // }

    // public function store(Request $request) {
    //     $inputsData = $request->all();
    //     $inputsData['contratFormel'] = $request->has('contratFormel') ? true : false;
    //     $inputsData['organigrammeClaire'] = $request->has('organigrammeClaire') ? true : false;
    //     $inputsData['dispositifFormation'] = $request->has('dispositifFormation') ? true : false;
    //     $inputsData['cotisationSocial'] = $request->has('cotisationSocial') ? true : false;
        
        

    //     entreprises::create($inputsData);
    //     return redirect()->route('entreprise.index');
    }
    }





    // public function __construct() {
    //     $this->middleware(['auth'])->only('create');
    // }



    // public function index () {
    //     return view('entreprises.index', [
    //         'entreprises' => Entreprise::with('localite')->get()
    //     ]);
    // }

    // public function create() {
    //     $quartiers = Quartier::all();
    //     return view('entreprises.create',[
    //         'quartiers' => $quartiers
    //     ]);
    // }

    // public function store(Request $request) {


        //TODO: Refactoring cette partie de code
    //     $inputsData = $request->all();
    //     $inputsData['dispositifFormation'] = $request->has('dispositifFormation') ? true : false;
    //     $inputsData['organigramme'] = $request->has('organigramme') ? true : false;
    //     $inputsData['contrat'] = $request->has('contrat') ? true : false;

    //     Entreprise::create($inputsData);
    //     return redirect()->route('entreprises.index');
    // }

    // public function show(Entreprise  $entreprise){
    //     return view('entreprises.show',['entreprise' => $entreprise]);

    // }