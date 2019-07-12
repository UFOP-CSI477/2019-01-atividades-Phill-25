@extends('principal')
@section('titulo', 'Inserir Aluno')
@section('conteudo')

<form class="form-group" action="{{route('aluno.store')}}" method="post">
  @csrf
  <label for="nome">Nome:</label>
  <input class="form-control" type="text" name="nome" value="">

  <label for="nome">E-mail:</label>
  <input class="form-control" type="text" name="email" value="" placeholder="exemplo@email.com.br">

  <label for="cidade_id">Cidades:</label>
  <select class="form-control" name="cidade_id">

    <option disabled selected> -- Selecione -- </option>

    @foreach ($cidades as $c)
      <option value="{{$c->id}}">{{$c->nome}}</option>
    @endforeach

  </select>

  <input class="btn btn-success" type="submit" name="btSalvar" value="Inserir">
</form>

@endsection
