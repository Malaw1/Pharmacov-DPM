<?php

namespace App\Http\Controllers;

use App\Models\Fiche;
use App\Models\Patient;
use App\Models\Notificateur;
use App\Models\Medicament;
use App\Models\Suivi;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('notifications.create');
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


        if($fich_id == Null){
            $numero= $code.'0001'.$a.''.$b.''.$c;
        }else
        {
            $id = $fich_id->id+1;

                if($fich_id->id < 10){
                $numero= $code.'000'.$id.''.$a.''.$b.''.$c;
                }elseif($fich_id->id < 99){
                    $numero= $code.'00'.$id.''.$a.''.$b.''.$c;
                }elseif($fich_id->id < 999){
                    $numero= $code.'00'.$id.''.$a.''.$b.''.$c;
                }else{
                    $numero= $code.''.$id.''.$a.''.$b.''.$c;
                }
        }

        try
        {
            $notificateur= Notificateur::updateOrCreate(['id' => $request->input('id_notificateur')],
                ['prenom' => $request->input('prenom'),
                'nom' => $request->input('nom'),
                'specialite' => $request->input('specialite'),
                'telephone' => $request->input('telephone'),
                'fonction' => $request->input('fonction'),
                'email' => $request->input('email'),
                'structure' => $request->input('structure'),
                'adresse_structure' => $request->input('adresse_structure'),
                'service' => $request->input('service'),
             ]);


            $medicament= Medicament::updateOrCreate(['id' => $request->input('id_medicament')],
                ['produit' => $request->input('produit'),
                'voie' => $request->input('voie'),
                'dci' => $request->input('dci'),
                'posologie' => $request->input('posologie'),
                'forme' => $request->input('forme'),
                'lot' => $request->input('lot'),
                'fabricant' => $request->input('fabricant'),
                'date_prise' => $request->input('date_prise'),
                'date_fin_prise' => $request->input('date_fin_prise'),
                'plante_medicinale' => $request->input('plante_medicinale'),
            ]);

            $patient= Patient::updateOrCreate(['id' => $request->input('id_fpatient')],
                ['numero_dossier' => $request->input('numero_dossier'),
                'initial' => $request->input('initial'),
                'age' => $request->input('age'),
                'sexe' => $request->input('sexe'),
                'poids' => $request->input('poids'),
                'taille' => $request->input('taille'),
                'facteur_associe' => $request->input('facteur_associe'),
            ]);

            $fiche= Fiche::updateOrCreate(['id' => $request->input('id_fiche')],
                ['numero' => $numero,
                'description' => $request->input('description'),
                'antecedents' => $request->input('antecedents'),
                'pathologies' => $request->input('pathologies'),
                'patient_id' => $patient->id,
                'medicament_id' => $medicament->id,
                'notificateur_id' => $notificateur->id,
            ]);

            $suivi= Suivi::updateOrCreate(['id' => $request->input('id_suivi')],
                ['apparition_effet' => $request->input('apparition_effet'),
                'disparition_effet' => $request->input('disparition_effet'),
                'readministration' => $request->input('readministration'),
                'reapparition' => $request->input('reapparition'),
                'traitement_correcteur' => $request->input('traitement_correcteur'),
                'suivi_patient' => $request->input('suivi_patient'),
                'evolution' => $request->input('evolution'),
                'fiche_id' => $fiche->id,
            ]);

            return response()->json(['success'=>'C bon']);
        }catch (\Throwable $th)
        {
            DB::rollBack();

            return response()->json($th,404);
        }

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
