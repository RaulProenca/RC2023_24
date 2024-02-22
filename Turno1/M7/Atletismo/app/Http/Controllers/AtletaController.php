<?php

namespace App\Http\Controllers;

use App\Models\Atleta;
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
        $atleta = new Atleta();
        $atleta->nome = $request->inputNome;
        $atleta->email = $request->inputEmail;
        $atleta->data_nasc = $request->inputDataNasc;
        $atleta->escalao = $request->selectEscalao;
        $atleta->genero = $request->inputGen;
        $atleta->cc = $request->inputCC;
        $atleta->nif = $request->inputNIF;
        $atleta->telemovel = $request->inputTel;
        $atleta->nacionalidade = $request->selectNac;
        $atleta->tshirt = $request->selectShirt;
        $atleta->federado = $request->has('switchFederado');
        $atleta->foto = $request->inputFoto;
        $atleta->save();
        return redirect()->route('atleta.create')
        ->with('message', 'Atleta criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Atleta $atleta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atleta $atleta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Atleta $atleta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atleta $atleta)
    {
        //
    }
}
