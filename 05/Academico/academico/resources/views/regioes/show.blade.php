@extends('principal')
@section('titulo', 'Cidade')
@section('conteudo')
<h1>Região: {{$regiao->nome}}</h1>

<p>Código: {{$regiao->id}}</p>

<a class="btn btn-outline-primary" href="{{route('regiao.index')}}">Voltar</a>

<a class="btn btn-outline-primary" href="{{route('regiao.edit', $regiao->id)}}">Editar</a>

<form class="" action="{{ route('regiao.destroy', $regiao->id) }}" method="post" onsubmit="return confirm('Confirma exclusão da região?');">
  @csrf
  @method('DELETE')

  <input class="btn btn-outline-danger" type="submit" value="Excluir">
</form>

@endsection
