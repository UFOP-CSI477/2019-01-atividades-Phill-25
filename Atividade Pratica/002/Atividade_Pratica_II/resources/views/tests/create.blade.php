@extends('principal.index')

@section('titulo', 'Novo Exame')

@section('conteudo')
  <div class="container  bg-primary">
    <div class="container-fluid mx-lg">
      <div class="row  text-ligth p-1">
          <div class="col">
            <form class="form-goup" action="{{route('tests.store')}}" method="post">
              @csrf

              <fieldset class="form-group">
                <label for="formGroupExampleInput">Data: </label>
                <input type="date" class="form-control" name="date"  >
              </fieldset>

              <label for="procedure_id">Procedimentos: </label>
              <select class="form-control" name="procedure_id">
                <option disabled selected> -- Selecione --</option>

                @foreach ($procedures as $p)
                  <option value="{{$p->id}}">{{$p->nome}}</option>
                @endforeach
              </select>

              <input class="btn btn-success mt-3 " type="submit" name="btSalvar" value="Solicitar">
            </form>
          </div>

      </div>
    </div>
  </div>
@endsection
