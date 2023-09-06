<?php

namespace App\Http\Controllers;

use App\Models\Policier;
use App\Http\Requests\StorePolicierRequest;
use App\Http\Requests\UpdatePolicierRequest;
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
        return view('policiersView.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        // Test database connection

        return view('policiersView.create');
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
        ]);
        // $nouveauPolicier = new Policier($request->all());
        $nouveauPolicier->save();
        // return redirect()->route('policier.index');
        return redirect()->back();
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
    public function edit(Policier $policier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePolicierRequest $request, Policier $policier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Policier $policier)
    {
        //
    }
}
