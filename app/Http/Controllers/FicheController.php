<?php

namespace App\Http\Controllers;

use App\Fiche;
use Illuminate\Http\Request;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notifications.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = 'SN-DPM-';
        $numero = 0;
        $a = date('d');
        $b = date('m');
        $c = date('y');
        $fich_id = fiche::All()->last();

        $id = $fich_id->id+1;

        if($fich_id == Null){
            $numero= $code.'0001'.$a.''.$b.''.$c;
        }elseif($fich_id->id < 10){
            $numero= $code.'000'.$id.''.$a.''.$b.''.$c;
        }elseif($fich_id->id < 99){
            $numero= $code.'00'.$id.''.$a.''.$b.''.$c;
        }elseif($fich_id->id < 999){
            $numero= $code.'00'.$id.''.$a.''.$b.''.$c;
        }else{
            $numero= $code.''.$id.''.$a.''.$b.''.$c;
        }

        $fiche= Fiche::create([
            'numero' => $numero,
            'description' => $request->input('description'),
            'antecedents' => $request->input('antecedents'),
            'status' => $request->input('pathologies'),
        ]);

        $notificateur= Notificateur::create([
            'pre' => $numero,
            'description' => $request->input('description'),
            'antecedents' => $request->input('antecedents'),
            'status' => $request->input('pathologies'),
        ]);


        $produit= Produit::create([
            'nom_medicament' => $request->input('nom_medicament'),
            'forme_pharmaceutique' => $request->input('forme_pharmaceutique'),
            'dci' => $request->input('dci'),
            'phone' => $request->input('phone'),
            'adresse' => $request->input('adresse'),
            'presentation' => $request->input('presentation'),
            'indication' => $request->input('indication'),
            'classe_therapeutique' => $request->input('classe_therapeutique'),
            'enreg_id' => $enreg->id,
            'pght' => $request->input('pght'),
            'email' => $request->input('email'),
            'manufacturer' => $request->input('manufacturer'),
            'excipient'     => $request->input('excipient'),
            'excipient_notoire' => $request->input('excipient_notoire')
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function show(Fiche $fiche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function edit(Fiche $fiche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fiche $fiche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fiche  $fiche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fiche $fiche)
    {
        //
    }
}
