@extends('principal')

@section('titulo','Estados')

@section('conteudo')
<h1>Estado: {{$estado->nome}}</h1>

<p>Código: {{$estado->id}}</p>
<p>Nome: {{$estado->nome}}</p>
<p>Sigla: {{$estado->sigla}}</p>

{{-- Voltar para a lista de estados --}}
<a class="btn btn-outline-primary" href="{{route('estados.index')}}">Voltar</a>

{{-- Editar o estado corrente --}}
<a class="btn btn-outline-primary" href="{{ route('estados.edit', $estado->id) }}">Editar</a>
{{-- Excluir o estado corrente --}}

<form class="" action="{{ route('estados.destroy', $estado->id) }}" method="post" onsubmit="return confirm('Confirma exclusão do estado?');">
  @csrf
  @method('DELETE')

  <input class="btn btn-outline-danger" type="submit" value="Excluir">
</form>

@endsection
