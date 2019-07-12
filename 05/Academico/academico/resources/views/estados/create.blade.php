@extends('principal')

@section('titulo','Inserir Estados')



@section('conteudo')

  <form class="form-goup" action="{{route('estados.store')}}" method="post">

    @csrf
    
    <label for="nome">Nome:</label>
    <input class="form-control" type="text" name="nome" value="">

    <label for="sigla">Sigla:</label>
    <input class="form-control" type="text" name="sigla" value="">

    <input class="btn btn-success" type="submit" name="btSalvar" value="Inserir">
  </form>



@endsection
