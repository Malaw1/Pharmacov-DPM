<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fiche;
use App\Patient;
use App\Medicament;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fiche = Fiche::join('medicaments', 'fiches.id', '=', 'medicaments.fiche_id')
            ->join('patients', 'fiches.id', '=', 'patients.fiche_id' )->get();
            
        return view('home', ['fiche' => $fiche]);
    }
}
