@extends('principal')

@section('titulo', 'Alunos')
@section('conteudo')

  <table class="table table-bordered table-hover table-striped">

    <tr class="thead-light">
      <th>Código</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Cidade</th>
      <th>Visualizar</th>
    </tr>

    @foreach($alunos as $a)
      <tr>
        <td>{{$a->id}}</td>
        <td>{{$a->nome}}</td>
        <td>{{$a->email}}</td>
        <td>{{$a->cidade->nome}}</td>
        <td><a href="{{ route('aluno.show', $a->id) }}">Exibir</a></td>

      </tr>
    @endforeach
  </table>

  <a class="btn btn-outline-dark" href="{{route('aluno.create')}}">Inserir</a>

@endsection
