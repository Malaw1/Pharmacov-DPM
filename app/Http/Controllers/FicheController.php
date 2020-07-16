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
        //
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
