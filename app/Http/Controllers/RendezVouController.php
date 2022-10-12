<?php

namespace App\Http\Controllers;

use App\Models\RendezVou;
use Illuminate\Http\Request;

class RendezVouController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rvs = RendezVou::all();
        return view('rendez_vous.index', compact('rvs'));
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
     * @param  \App\Models\RendezVou  $rendezVou
     * @return \Illuminate\Http\Response
     */
    public function show(RendezVou $rendezVou)
    {
        return view('rendez_vous.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RendezVou  $rendezVou
     * @return \Illuminate\Http\Response
     */
    public function edit(RendezVou $rendezVou)
    {
        return view('rendez_vous.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RendezVou  $rendezVou
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RendezVou $rendezVou)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RendezVou  $rendezVou
     * @return \Illuminate\Http\Response
     */
    public function destroy(RendezVou $rendezVou)
    {
        //
    }
}
