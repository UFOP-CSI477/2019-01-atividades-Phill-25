@extends('principal')
@section('titulo', 'Inserir Região')
@section('conteudo')

<form class="form-group" action="{{route('regiao.store')}}" method="post">
  @csrf
  <label for="nome">Nome:</label>
  <input class="form-control" type="text" name="nome" value="">

  <input class="btn btn-success" type="submit" name="btSalvar" value="Inserir">
</form>

@endsection
