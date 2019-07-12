@extends('principal.index')

@section('titulo', 'Novo Exame')

@section('conteudo')
  <div class="container  bg-primary">
    <div class="container-fluid mx-lg">
      <div class="row  text-ligth p-1">
          <div class="col">
            <form class="form-goup" action="{{route('procedures.store')}}" method="post">
              @csrf

              <fieldset class="form-group">
                <label for="nome">Nome: </label>
                <input type="text" class="form-control" name="nome"  >
              </fieldset>

              <label for="price">Valor: </label>
              <input class="form-control" type="number" name="price" value="">

              <input class="btn btn-success mt-3 " type="submit" name="btSalvar" value="Inserir">
            </form>
          </div>

      </div>
    </div>
  </div>
@endsection
