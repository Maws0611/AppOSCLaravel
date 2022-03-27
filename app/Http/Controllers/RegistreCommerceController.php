<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegistreCommerce;
use App\Models\Entreprise;

class RegistreCommerceController extends Controller
{
    
    public function index()
    {
        $registre_commerces = RegistreCommerce::all();
        return view('registreCommerce.index', compact('registre_commerces'));
    }

    public function create()
    {
        $entreprises = Entreprise::all();
        return view('registreCommerce.create', compact('entreprises'));
    }

    
    public function store(Request $request)
    
    {
        // dd($_POST);
        $validationForm = $request->validate([
            'prenomRepondant' =>'required',
            'nomRepondant' =>'required',
            'telephoneRepondant' =>'required|unique:registre_commerces',
            'entreprise_id' =>'required'
        ]);

        $registre_commerce = new RegistreCommerce();
        $registre_commerce->prenomRepondant = $request->prenomEntreprise;
        $registre_commerce->nomRepondant = $request->nomEntreprise;
        $registre_commerce->telephoneRepondant = $request->telephoneEntreprise;
        $registre_commerce->entreprise_id = $request->entreprise_id;
        $registre_commerce->save();
        return redirect('/registreCommerces');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
