@extends('principal.index')

@section('titulo','Relatório')

@section('conteudo')

<div class="container  bg-primary">
  <div class="container-fluid mx-lg">
    <div class="row">
      <div class="col">
      <table class=" mt-2 table table-bordered table-hover table-striped table-primary ">

        <tr class="thead-light">
          <th>Código</th>
          <th>Data</th>
          <th>Procedimento</th>


        </tr>

        @foreach($tests as $t)
          <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->date}}</td>
            <td>{{$t->procedure->nome}}</td>

          </tr>
        @endforeach

        <tr>
          <td>n p</td>
          <td colspan="4">  {{$quant}}</td>
        </tr>

      </table>

    </div>
    </div>
  </div>
</div>


@endsection
