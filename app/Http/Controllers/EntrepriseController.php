<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Siege;
use App\Models\Pays;
use App\Models\Departement;
use App\Models\Commune;
use App\Models\Region;
use App\Models\RegistreCommerce;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class EntrepriseController extends Controller
{
    
    public function index()
    {
        $entreprises = Entreprise::all();
        return view('entreprise.index', compact('entreprises'));
    }

   
    public function create()
    {
        $sieges = Siege::all();
        $communes = Commune::all();
        $departements = Departement::all();
        $regions = Region::all();
        $pays = Pays::all();
        return view('entreprise.create', compact('sieges', 'communes', 'departements', 'regions', 'pays'));
    }

   
    public function store(Request $request)
    {
        $validationForm = $request->validate([
            'nomEntreprise' =>'required|unique:entreprises|max:200',
            'pageWeb' =>'required|unique:entreprises|max:200',
            'dateCreation' =>'required',
            'nombreEmploye' =>'required',
            'siege_id' =>'required'
        ]);

        // $entreprise = Entreprise::create($validationForm);

        $entreprise = new Entreprise();
        $entreprise->nomEntreprise = $request->nomEntreprise;
        $entreprise->pageWeb = $request->pageWeb;
        $entreprise->dateCreation = $request->dateCreation;
        $entreprise->nombreEmploye = $request->nombreEmploye;
        $entreprise->contratFormel = $request->has('contratFormel');
        $entreprise->organigrammeClaire = $request->has('organigrammeClaire');
        $entreprise->dispositifFormation = $request->has('dispositifFormation');
        $entreprise->cotisationSocial = $request->has('cotisationSocial');
        $entreprise->siege_id = $request->siege_id;
        $entreprise->save();
        return redirect('/entreprises');
       
            // $table->enum('regimeJuridique', ['EI', 'EURL', 'SNC', 'SA', 'SAS', 'SARL', 'GIE']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $entreprises = Entreprise::all();
        // $registreCommerces = RegistreCommerce::all();
        // return view('entreprise.show', compact('entreprises', 'registreCommerces'));
        // return redirect('entreprises{entreprise}');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
