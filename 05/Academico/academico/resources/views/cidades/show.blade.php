@extends('principal')
@section('titulo', 'Cidade')
@section('conteudo')
<h1>Cidade: {{$cidade->nome}}</h1>
<p>Estado: {{$cidade->estado->nome}}</p>
<p>Código: {{$cidade->id}}</p>

<a class="btn btn-outline-primary" href="{{route('cidades.index')}}">Voltar</a>

<a class="btn btn-outline-primary" href="{{route('cidades.edit', $cidade->id)}}">Editar</a>

<form class="" action="{{ route('cidades.destroy', $cidade->id) }}" method="post" onsubmit="return confirm('Confirma exclusão da cidade?');">
  @csrf
  @method('DELETE')

  <input class="btn btn-outline-danger" type="submit" value="Excluir">
</form>

@endsection
