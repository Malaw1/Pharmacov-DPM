<?php

namespace App\Http\Controllers;

use App\Fiche;
use App\Patient;
use App\Notificateur;
use App\Medicament;
use App\Suivi;
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
            'pathologies' => $request->input('pathologies'),
        ]);

        $notificateur= Notificateur::create([
            'prenom' => $request->input('prenom'),
            'nom' => $request->input('nom'),
            'proffession' => $request->input('proffession'),
            'specialite' => $request->input('specialite'),
            'telephone' => $request->input('telephone'),
            'email' => $request->input('email'),
            'structure' => $request->input('structure'),
            'service' => $request->input('service'),
            'fiche_id' => $fiche->id,
        ]);


        $medicament= Medicament::create([
            'produit' => $request->input('produit'),
            'voie' => $request->input('voie'),
            'dci' => $request->input('dci'),
            'posologie' => $request->input('posologie'),
            'forme' => $request->input('forme'),
            'lot' => $request->input('lot'),
            'fabricant' => $request->input('fabricant'),
            'date_prise' => $request->input('date_prise'),
            'fiche_id' => $fiche->id,
            'date_fin_prise' => $request->input('date_fin_prise'),
            'plante_medicinale' => $request->input('plante_medicinale'),
        ]);

        $patient= Patient::create([
            'numero_dossier' => $request->input('numero_dossier'),
            'initial' => $request->input('initial'),
            'age' => $request->input('age'),
            'sexe' => $request->input('sexe'),
            'poids' => $request->input('poids'),
            'taille' => $request->input('taille'),
            'facteur_associe' => $request->input('facteur_associe'),
            'fiche_id' => $fiche->id,
        ]);

        $suivi= Suivi::create([
            'apparition_effet' => $request->input('apparition_effet'),
            'disparition_effet' => $request->input('disparition_effet'),
            'readministration' => $request->input('readministration'),
            'reapparition' => $request->input('reapparition'),
            'traitement_correcteur' => $request->input('traitement_correcteur'),
            'suivi_patient' => $request->input('suivi_patient'),
            'evolution' => $request->input('evolution'),
            'fiche_id' => $fiche->id,
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
        $fiche = Fiche::join('notificateurs', 'notificateurs.fiche_id', '=', 'fiches.id')
        ->join('medicaments', 'medicaments.fiche_id', '=', 'fiches.id')
        ->join('patients', 'patients.fiche_id', '=', 'fiches.id')
        ->join('suivis', 'suivis.fiche_id', '=', 'fiches.id')
        ->where('fiches.id', $fiche->id)
        ->first();

        return view('notifications.show', ['fiche' => $fiche]);
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
