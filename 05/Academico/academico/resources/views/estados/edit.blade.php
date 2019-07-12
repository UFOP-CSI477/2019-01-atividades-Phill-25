@extends('principal')

@section('titulo','Editar Estado')

@section('conteudo')
  <form class="form-goup" action="{{ route('estados.update', $estado->id) }}" method="post">
    @csrf
    @method('PATCH')

    <label for="nome">Nome:</label>
    <input class="form-control" type="text" name="nome" value="{{$estado->nome}}">

    <label for="sigla">Sigla:</label>
    <input class="form-control" type="text" name="sigla" value="{{$estado->sigla}}">

    <input class="btn btn-success" type="submit" name="btSalvar" value="Editar">
  </form>
@endsection
