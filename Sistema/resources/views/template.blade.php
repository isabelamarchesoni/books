<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="css/home.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <title> @yield('titulo') </title>
   
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(16, 36, 102);">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Books</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
 
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="produtos">Produtos</a></li>
                    <li class="nav-item"><a class="nav-link" href="contato">Contato</a></li>
        <!-- Botão dropdown -->
                    @if(Session::has('usuario_id'))
                       <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle btn text-white px-3" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Olá, {{ Session::get('usuario_nome') }}
                            </a>
                            <ul class="d dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-btn nav-link text-black" href="/dashboard">Dashboard</a></li>
                        <li class="nav-item"><a class="dropdown-btn nav-link text-black" href="/logout">Sair ({{ Session::get('usuario_nome') }})</a></li>
                    @else
                        <li class="nav-item">
                            <a href="frmlogin" class="btn btn-outline-light ms-2">Login</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
 
    <main>
 
        @yield('conteudo')
 
    </main>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
</body>
</html>
 
 