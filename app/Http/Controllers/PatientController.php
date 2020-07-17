<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Patient::with('dossier', 'user')->where('sup', '=', false)->latest()->get();

            // prendre les données dans file et le passé a DataTable
            //tout en creant la colonne action et ces boutons

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {

                    $btn = ' <a href="javascript: void(0)" data-toggle = "tooltip" data-id =' . $row->id . ' data-original-title ="Edit" class=" btn btn-warning btn-sm mr-1 editBtn "> <i class="fas fa-user-edit"></i> </a> ';
                    $btn = $btn . ' <a href="javascript: void(0)" data-toggle = "tooltip" data-id = ' . $row->id . ' data-original-title = " Supprimer " class=" btn btn-sm btn-danger btn-sm  deleteBtn"> <i class="fa fa-trash"></i></a> ';

                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);

        }

        return view('patient');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Patient::updateOrCreate(['id' => $request->product_id],

        ['name' => $request->name, 'detail' => $request->detail]);

        return response()->json(['success'=>'Product saved successfully.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
