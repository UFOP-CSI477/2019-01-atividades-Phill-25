<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParginasController extends Controller
{
    public function index(){
      return view('principal');
    }

    public function about(){
      return view('welcome');
    }

    public function listar(){
      $nome = "Philipe";
      $usuario = "BigPhill";

      $alunos = ['Ana', 'Philipe', 'Pedro', 'Rick'];


      return view('lista') -> with('alunos', $alunos);
    }
}
