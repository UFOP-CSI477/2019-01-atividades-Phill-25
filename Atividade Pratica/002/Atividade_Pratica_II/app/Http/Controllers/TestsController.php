<?php

namespace App\Http\Controllers;

use App\tests;
use App\procedures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class TestsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tests = Tests::all()->where('user_id', Auth::id());

        return view('tests.index')->with('tests',$tests)->with('quant', $tests->count());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tests.create')->with('procedures', Procedures::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Tests::create($request->all());
        $test = new Tests;
        $test->date = $request->date;
        $test->user_id = Auth::id();
        $test->procedure_id = $request->procedure_id;


        $test->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tests  $tests
     * @return \Illuminate\Http\Response
     */
    public function show(tests $tests)
    {
        return view('tests.show')->with('test',$tests);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tests  $tests
     * @return \Illuminate\Http\Response
     */
    public function edit(tests $tests)
    {
      return view('tests.edit')->with('test',$tests);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tests  $tests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tests $tests)
    {
      $tests->fill($request->all());

      $tests->save();

      return redirect()->route('tests.show', $tests->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tests  $tests
     * @return \Illuminate\Http\Response
     */
    public function destroy(tests $tests)
    {
        $tests->delete();

        return redirect()->route('tests.index');
    }
}
