@extends('principal')

@section('titulo', 'Regiões')
@section('conteudo')

  <table class="table table-bordered table-hover table-striped">

    <tr class="thead-light">
      <th>Código</th>
      <th>Nome</th>
      <th>Visualizar</th>
    </tr>

    @foreach($regioes as $r)
      <tr>
        <td>{{$r->id}}</td>
        <td>{{$r->nome}}</td>

        <td><a href="{{ route('regiao.show', $r->id) }}">Exibir</a></td>

      </tr>
    @endforeach
  </table>

  <a class="btn btn-outline-dark" href="{{route('regiao.create')}}">Inserir</a>

@endsection
