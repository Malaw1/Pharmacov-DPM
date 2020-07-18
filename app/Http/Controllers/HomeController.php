<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fiche;
use App\Models\Patient;
use App\Models\Medicament;
use Yajra\DataTables\Facades\DataTables;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        // $fiche = Fiche::join('medicaments', 'fiches.id', '=', 'medicaments.fiche_id')
        //     ->join('patients', 'fiches.id', '=', 'patients.fiche_id' )->get();

        $fiche = 0;
            if ($request->ajax()) {

                $data = Fiche::with('patient', 'medicament')->latest()->get();

                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($row) {

                        $btn = ' <a href="javascript: void(0)" data-toggle = "tooltip" data-id =' . $row->id . ' data-original-title ="Edit" class=" btn btn-warning btn-sm mr-1 editBtn "> <i class="fa fa-wrench"></i> </a> ';
                        $btn = $btn . ' <a href="javascript: void(0)" data-toggle = "tooltip" data-id = ' . $row->id . ' data-original-title = " Supprimer " class=" btn btn-sm btn-danger btn-sm  deleteBtn"> <i class="fa fa-trash"></i></a> ';

                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);

            }

        return view('home', ['fiche' => $fiche]);
    }
}
