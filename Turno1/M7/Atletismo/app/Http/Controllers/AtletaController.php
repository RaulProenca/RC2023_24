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
        //Listar Atletas
        $atletas = Atleta::all(); //Obter todos os atletas
        return view('atleta.index', compact('atletas'));

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
        //Validação dos dados
        $request->validate([
            'inputNome' => 'required|string|max:255',
            'inputEmail' => 'required|email|unique:atletas,email',
            'inputDataNasc' => 'required|date',
            'selectEscalao' => 'required',
            'inputGen' => 'required',
            'inputCC' => 'required|numeric|digits:8|unique:atletas,cc',
            'inputNIF' => 'required|numeric|digits:9|unique:atletas,nif',
            'inputTel' => 'required|numeric|digits:9',
            'selectNac' => 'required',
            'selectShirt' => 'required',
            //'inputFoto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //Inserção de dados na base de dados
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
        //Apagar atleta
        $atleta->delete();
        return redirect()->route('atleta.index')
            ->with('message', 'Atleta apagado com sucesso!');
    }
}