<?php

namespace App\Http\Controllers;

use App\Models\Policier;
use App\Http\Requests\StorePolicierRequest;
use App\Http\Requests\UpdatePolicierRequest;
use App\Models\Service;

// use Illuminate\Support\Facades\DB;

class PolicierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // try {
        //     if(DB::connection()->getPdo()){
        //         echo 'success';
        //     }
           
        // } catch (\Exception $e) {
        //     die("connexion echec : " . $e );
        // }
        //

        $ListPoliciers = Policier::all();
        $AllServices = Service::all();

        return view('policiersView.index', compact('ListPoliciers', 'AllServices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // Test database connection
        $ListServices = Service::all();
        return view('policiersView.create', compact('ListServices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePolicierRequest $request)
    {
        //
        // dd($request->all());
        // var_dump($request->all());
        $nouveauPolicier = new Policier([
            'nom'=> $request->nom,
            'prenoms'=> $request->prenoms,
            'matricule'=> $request->matricule,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            'service_id'=> $request->service_id
        ]);
        // $nouveauPolicier = new Policier($request->all());
        $nouveauPolicier->save();
        // return redirect()->route('policier.index');
        return redirect()->back()->with('success','Policier enregistre avec succes');
    }

    /**
     * Display the specified resource.
     */
    public function show(Policier $policier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Policier $policier, $id)
    {
        $Modifierpolicier = Policier::findorFail($id);
        $ListServices = Service::all();
       
        return view('policiersView.edit', compact('Modifierpolicier','ListServices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePolicierRequest $request,  $id)
    {
        //
        $updatePolicier = Policier::findorFail($id);
        $updatePolicier->update([
            'nom'=> $request->nom,
            'prenoms'=> $request->prenoms,
            'matricule'=> $request->matricule,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            'service_id'=> $request->service_id
        ]);

        return redirect()->back()->with('success','Policier modifie avec succes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $supprimerPolicier = Policier::findorFail($id);
        $supprimerPolicier->delete();
        return redirect()->back()->with('success','Policier supprime avec succes');
    }
}
