@extends('principal.index')

@section('titulo','Visualização')
@section('conteudo')

  <div class="container  bg-primary">
    <div class="container-fluid mx-lg">
      <div class="row  text-ligth p-1">
          <div class="col">
            <h1>Procedimento: {{$procedures->id}}</h1>
          </div>

      </div>
    </div>
  </div>





@endsection
