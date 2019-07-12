@extends('principal')
@section('titulo', 'Cidade')
@section('conteudo')
<h1>Aluno: {{$aluno->nome}}</h1>
<p>E-mail: {{$aluno->email}}</p>
<p>Cidade: {{$aluno->cidade->nome}}</p>
<p>Código: {{$aluno->id}}</p>

<a class="btn btn-outline-primary" href="{{route('aluno.index')}}">Voltar</a>

<a class="btn btn-outline-primary" href="{{route('aluno.edit', $aluno->id)}}">Editar</a>

<form class="" action="{{ route('aluno.destroy', $aluno->id) }}" method="post" onsubmit="return confirm('Confirma exclusão do aluno?');">
  @csrf
  @method('DELETE')

  <input class="btn btn-outline-danger" type="submit" value="Excluir">
</form>

@endsection
