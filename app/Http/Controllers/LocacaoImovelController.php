<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LocacaoImovel;

class LocacaoImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $locacao = new LocacaoImovel();
        $locacao->cep=$request->codCep;
        $locacao->rua=$request->logradouro;
        $locacao->numero='1';
        $locacao->bairro=$request->bairro;
        $locacao->cidade=$request->localidade;
        $locacao->estado=$request->uf;
        $locacao->save();
        return "Gravado com sucesso!";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $locacao = LocacaoImovel::where('cep',$request->codCep );
        $locacao->rua=$request->logradouro;
        $locacao->numero='1';
        $locacao->bairro=$request->bairro;
        $locacao->cidade=$request->localidade;
        $locacao->estado=$request->uf;
        $locacao->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $locacao = LocacaoImovel::where('cep',$request->codCep );
        $locacao->delete();
    }
    
}
