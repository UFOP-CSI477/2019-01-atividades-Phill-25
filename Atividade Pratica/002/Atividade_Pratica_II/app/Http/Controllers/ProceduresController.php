<?php

namespace App\Http\Controllers;

use App\Procedures;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProceduresController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth',['except'=>['index']]);
  }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedures = Procedures::all();

        return view('procedures.index')->with('procedures', $procedures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('procedures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Procedures::create($request->all());
        $procedure = new Procedures;
        $procedure->nome = $request->nome;
        $procedure->price = $request->price;
        $procedure->users_id = Auth::id();

        $procedure->save();

        return redirect('/gestão');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procedures  $procedures
     * @return \Illuminate\Http\Response
     */
    public function show(Procedures $procedures)
    {   return dd($procedures);
        return view('procedures.show')->with('procedures', $procedures);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procedures  $procedures
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedures $procedures)
    {

        return view('procedures.edit')->with('procedures', $procedures);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procedures  $procedures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedures $procedures)
    {
      $procedures = new Procedures;
      $procedures->nome = $request->nome;
      $procedures->price = $request->price;
      $procedures->users_id = Auth::id();

      $procedures->save();

        return redirect('/gestão');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procedures  $procedures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedures $procedures)
    {
        $procedures->delete();

        return redirect()->route('procedures.index');
    }


    public function gestao(){
      $procedures = Procedures::all();
      return view('procedures.gestao')->with('procedures', $procedures);
    }

}
