@extends('principal')

@section('titulo', 'Inserir Cidades')

@section('conteudo')

<form class="form-group" action="{{route('cidades.store')}}" method="post">
  @csrf
  <label for="nome">Nome:</label>
  <input class="form-control" type="text" name="nome" value="">

  <label for="estado">Estados:</label>
  <select class="form-control" name="estado_id">
    <option disabled selected> -- Selecione -- </option>

    @foreach ($estados as $e)
      <option value="{{$e->id}}">{{$e->nome}}</option>
    @endforeach

  <input class="btn btn-success" type="submit" name="btSalvar" value="Inserir">
</form>





@endsection
