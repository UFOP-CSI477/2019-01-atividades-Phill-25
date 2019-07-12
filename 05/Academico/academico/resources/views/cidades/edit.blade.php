@extends('principal')

@section('titulo', 'Editar Cidade')
@section('conteudo')

  <form class="form-group" action="{{route('cidades.update', $cidade->id)}}" method="post">
    @csrf
    @method('PATCH')

    <label for="nome">Nome:</label>
    <input class="form-control" type="text" name="nome" value="{{$cidade->nome}}">

    <label for="estado">Estados:</label>
    <select class="form-control" name="estado_id">
      <option disabled selected> -- Selecione -- </option>
      <option value="13">Minas Gerais</option>

    <input class="btn btn-success" type="submit" name="btSalvar" value="Editar">
  </form>
@endsection
