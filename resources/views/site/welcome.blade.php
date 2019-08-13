<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registro de Eventos internos no IFMG</title>
  </head>
  <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="{{route('home')}}">Eventos IFMG</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Como funciona<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                    @if(auth()->user() != null)
                        <a class="nav-link" href="{{route('admin')}}">Meus Eventos</a>
                    @else
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    @endif
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="container">
            <div class="jumbotron">
                <h1>Registro de eventos internos do IFMG</h1>
                <p class="lead">Sistema de registro de presença nos eventos do IFMG </p>
                <p><a class="btn btn-lg btn-primary" href="" role="button">Como funciona</a></p>
                @if(auth()->user() != null)
                    <p><a class="btn btn-lg btn-primary" href="{{route('admin')}}" role="button"> Meus eventos</a></p>
                @else
                    <p><a class="btn btn-lg btn-primary" href="{{route('login')}}" role="button">Login</a></p>
                @endif
              </div>
        </main>

        </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
