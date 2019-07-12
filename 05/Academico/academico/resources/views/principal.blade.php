<!DOCTYPE html>
<html lang="br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>
  </head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <body>
    <!-- EXIBIR MENSAGENS->CAMPO:MENSAGEM //-->
    @if (Session::has('mensagem'))
      <div id="msg1"  class="alert alert-success" >
        <span>{{Session::get('mensagem')}}<span>
      </div>
    @endif

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Acadêmico</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/welcome">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/alunos/listar">Listar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/estados">Estados</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cidades">Cidades</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/regiao">Regiões</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/aluno">Alunos</a>
      </li>
    </ul>

  </div>
</nav>




    <!--LINKS - MENU LATERAL //-->
    {{-- <ul >
      <li class="btn  btn-outline-dark" ><a class="btn"  href="/">Home</a></li>
      <li class="btn btn-outline-dark"><a class="btn" href="/welcome">About</a></li>
      <li class="btn btn-outline-dark"><a class="btn" href="/alunos/listar">Listar</a></li>
      <li class="btn btn-outline-dark"><a class="btn" href="/estados">Estados</a></li>
      <li class="btn btn-outline-dark"><a class="btn" href="/cidades">Cidades</a></li>
    </ul> --}}

    <!-- conteúdo central//-->
    @yield('conteudo')

  </body>
</html>
