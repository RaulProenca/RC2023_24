<?php

namespace App\Http\Controllers;

use App\Models\atleta;
use Illuminate\Http\Request;

class AtletaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('atleta.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(atleta $atleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(atleta $atleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, atleta $atleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(atleta $atleta)
    {
        //
    }
}