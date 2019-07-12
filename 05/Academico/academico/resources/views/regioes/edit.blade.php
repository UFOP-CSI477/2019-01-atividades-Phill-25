@extends('principal')

@section('titulo', 'Editar Regiao')
@section('conteudo')

  <form class="form-group" action="{{route('regiao.update', $regiao->id)}}" method="post">
    @csrf
    @method('PATCH')
    <label for="nome">Nome:</label>
    <input class="form-control" type="text" name="nome" value="{{$regiao->nome}}">

    <input class="btn btn-success" type="submit" name="btSalvar" value="Editar">
  </form>


@endsection
