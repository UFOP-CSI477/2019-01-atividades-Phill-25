@extends('principal')

@section('titulo', 'Cidades')
@section('conteudo')

  <table class="table table-bordered table-hover table-striped">

    <tr class="thead-light">
      <th>Código</th>
      <th>Nome</th>
      <th>Estado</th>
      <th>Visualizar</th>
    </tr>

    @foreach($cidades as $c)
      <tr>
        <td>{{$c->id}}</td>
        <td>{{$c->nome}}</td>
        <td>{{$c->estado->nome}}</td>
        <td><a href="{{ route('cidades.show', $c->id) }}">Exibir</a></td>

      </tr>
    @endforeach
  </table>

  <a class="btn btn-outline-dark" href="{{route('cidades.create')}}">Inserir</a>



@endsection
