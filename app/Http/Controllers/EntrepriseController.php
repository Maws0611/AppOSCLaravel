<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quartiers;
use App\Models\entreprises;

class EntrepriseController extends Controller
{
    public function index() {
        return view('entreprise.index', [
            'entreprises' => entreprises::all()
        ]);

    }

    public function create() {
        return view('entreprise.create', [
            'quartiers' => quartiers::all()
        ]);
    }

    public function store(Request $request) {
        return view('entreprise.store');

        entreprises::create($request->all());
        return redirect()->route('entreprise.index');
    }


    public function store1(Request $request){
        $request->validate([
            'nomEntreprise' => ['required', 'string', 'max:255'],
            'pageWeb' => ['required', 'string', 'pageWeb', 'max:255', 'unique:users'],
            'dateCreation' => ['required', 'string', 'dateCreation', 'max:255', 'unique:users'],
            'nombreEmploye' => ['required', 'string', 'nombreEmploye', 'max:255', 'unique:users'],
            'contratFormel' => ['required', 'string', 'contratFormel', 'max:255', 'unique:users'],
            'organigrammeClaire' => ['required', 'string', 'organigrammeClaire', 'max:255', 'unique:users'],
            'dispositifFormation' => ['required', 'string', 'dispositifFormation', 'max:255', 'unique:users'],
            'cotisationSocial' => ['required', 'string', 'cotisationSocial', 'max:255', 'unique:users'],
            'registreJuridique' => ['required', 'string', 'registreJuridique', 'max:255', 'unique:users'],
            // 'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $request = entreprises::create([
            'nomEntreprise' => $request->nomEntreprise,
            'pageWeb' => $request->pageWeb,
            // 'password' => Hash::make($request->password),
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
    }

    // $sieges = Entreprise::find(1)->sieges;
    // foreach ($sieges as $siege){

}
