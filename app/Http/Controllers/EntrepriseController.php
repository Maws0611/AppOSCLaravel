<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quartiers;
use App\Models\entreprises;

class EntrepriseController extends Controller
{
    // public function index() {
    //     return view('entreprise.index', [
    //         'entreprises' => entreprises::all()
    //     ]);

    // }

    // public function create() {
    //     return view('entreprise.create', [
            // 'quartiers' => quartiers::all()
    //     ]);
    // }

    // public function store(Request $request) {
        
    //     $contratFormel = $request->boolean('contratFormel');
    //     $contratFormel = $request->old('contratFormel');
        
    //     $request->contratFormel = $contratFormel === 'true'? 1: 0;
    //     $request->organigrammeClaire = $request->organigrammeClaire === 'true'? 1: 0;
    //     $request->dispositifFormation = $request->dispositifFormation === 'true'? 1: 0;
    //     $request->cotisationSocial = $request->cotisationSocial === 'true'? 1: 0;
        
        // dd($request->contratFormel, $request->organigrammeClaire, $request->dispositifFormation, $request->cotisationSocial);
        // dd($request->dispositifFormation);
    //     $entreprises = new entreprises;
    //     entreprises::create($request->all());
        
    //     return view('entreprise.store');
    // }
    }