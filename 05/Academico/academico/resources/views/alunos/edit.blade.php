@extends('principal')

@section('titulo', 'Editar Regiao')
@section('conteudo')

  <form class="form-group" action="{{route('aluno.update', $aluno->id)}}" method="post">
      @csrf
      @method('PATCH')
      <label for="nome">Nome:</label>
      <input class="form-control" type="text" name="nome" value="{{$aluno->nome}}">

      <label for="nome">E-mail:</label>
      <input class="form-control" type="text" name="email" value="{{$aluno->email}}" >

      <label for="cidade_id">Cidades:</label>
      <select class="form-control" name="cidade_id">

        <option disabled selected> -- Selecione -- </option>

        @foreach ($cidades as $c)
          <option value="{{$c->id}}">{{$c->nome}}</option>
        @endforeach

      </select>

      <input class="btn btn-success" type="submit" name="btSalvar" value="Editar">
    </form>


@endsection
