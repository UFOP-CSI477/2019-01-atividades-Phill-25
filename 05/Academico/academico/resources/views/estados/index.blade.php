@extends('principal')

@section('titulo','Estados')



@section('conteudo')

  <table class="table table-bordered table-hover table-striped">

    <tr class="thead-light">
      <th>Código</th>
      <th>Nome</th>
      <th>Sigla</th>
      <th>Visualizar</th>
    </tr>

    @foreach($estados as $e)
      <tr>
        <td>{{$e->id}}</td>
        <td>{{$e->nome}}</td>
        <td>{{$e->sigla}}</td>
        <td><a href="{{ route('estados.show', $e->id) }}">Exibir</a></td>

      </tr>
    @endforeach
  </table>
<a class="btn btn-outline-dark" href="{{route('estados.create')}}">Inserir</a>

@endsection
