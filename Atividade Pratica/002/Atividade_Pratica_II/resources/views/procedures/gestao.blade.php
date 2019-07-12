@extends('principal.index')

@section('titulo','Gestão')

@section('conteudo')

<div class="container  bg-primary">
  <div class="container-fluid mx-lg">
    <div class="row">
      <div class="col">
      <table class=" mt-2 table table-bordered table-hover table-striped table-primary ">

        <tr class="thead-light">
          <th>Código</th>
          <th>Nome</th>
          <th>Preço (R$)</th>
          <th>Exibir</th>



        </tr>

        @foreach($procedures as $p)
          <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nome}}</td>
            <td>{{$p->price}}</td>
            <td><a href="{{ route('procedures.show,' $p->id ) }}"> Exibir</a></td>

          </tr>
        @endforeach
      </table>
      <a class="btn btn-outline-success" href="{{ route('procedures.create') }}">Novo</a>
    </div>
    </div>
  </div>
</div>


@endsection
