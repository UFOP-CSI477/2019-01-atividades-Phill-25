<?php

namespace App\Http\Controllers;

use App\Regiao;
use Illuminate\Http\Request;

class RegiaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regioes = Regiao::all();

        return view('regioes.index') -> with('regioes', $regioes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regioes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Regiao::create($request->all());

        session()->flash('mensagem', 'Região adicionada com sucesso!');

        return redirect()->route('regiao.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regiao  $regiao
     * @return \Illuminate\Http\Response
     */
    public function show(Regiao $regiao)
    {
        return view('regioes.show')->with('regiao', $regiao);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regiao  $regiao
     * @return \Illuminate\Http\Response
     */
    public function edit(Regiao $regiao)
    {

      return view('regioes.edit')->with('regiao', $regiao);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regiao  $regiao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regiao $regiao)
    {
        $regiao->fill($request->all());
        $regiao->save();

        session()->flash('mensagem', 'Região atualizada com sucesso!');

        return redirect()->route('regiao.show', $regiao->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regiao  $regiao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regiao $regiao)
    {
        $regiao->delete();
        session()->flash('mensagem', 'Região excluida com sucesso!');

        return redirect()->route('regiao.index');
    }
}
