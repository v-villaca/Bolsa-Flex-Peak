<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script href="/js/script.js"></script>

    <title>@yield('title')</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg" id="cabecalho">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="/css/img/logoVet.png"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav m-auto">
                  <li class="nav-item">
                    <a class="nav-link active menu p-3" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active menu p-3" href="/">Serviços</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active menu p-3" href="/pesquisa">Profissionais</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active menu p-3" href="/events/cadastro">Cadastre-se</a>
                  </li>
                </ul>
                <form class="d-flex shadow">
                  <input class="form-control me-0 bgYellow " type="search" placeholder="Especialidade(ex: oftamologia)" aria-label="Search" id="campoPesq">
                  <button class="btn btn-outline-success bgBlue btnPesqBlue" type="submit"><img src="/css/img/Search Button.png"></button>
                </form>
              </div>
            </div>
          </nav>

            @yield('content')

    <footer id="rodaPe">
      <div class="container footerPadding">
        <div class="row text-center">
          <div class="col-md-3">
            <h2 class="fw-bolder">Sobre</h2>
            <h4 class="mt-3">Quem somos</h4>
            <h4 class="mt-3">Proprietários</h4>
            <h4 class="mt-3">Socios</h4>
            <h4 class="mt-3">Pet Lovers</h4>
            <h4 class="mt-3">Onde nos encontrar</h4>
          </div>
  
          <div class="col-md-3">
            <h2 class="fw-bolder">Serviços</h2>
            <h4 class="mt-3">Consultas</h4>
            <h4 class="mt-3">Oftamologia</h4>
            <h4 class="mt-3">Fisioterapia</h4>
            <h4 class="mt-3">Anestesistas</h4>
            <h4 class="mt-3">Produtos Pet</h4>
          </div>
  
          <div class="col-md-6 text-end">
            <h2>FALE CONOSCO</h2>
            <h4 class="py-3">Mande-nos uma mensagem!</h4>
              <form class="d-flex justify-content-end">
                <input class="fw-bolder" type="search" id="campoPesqEnd">
                <button class="btn btn-outline-success bgBlue fw-bolder btnPesqBlue" type="submit" id="btnPesqEnd"><img src="/css/img/iconAviao.png"></button>
              </form>    
            <img src="/css/img/Instagram.png" href="" class="rounded-circle ms-2 me-2 mt-5">
            <img src="/css/img/Facebook.png" href="" class="rounded-circle ms-2 me-2 mt-5">
            <img src="/css/img/Twitter.png" href="" class="rounded-circle ms-2 me-2 mt-5">
            <img src="/css/img/WhatsApp.png" href="" class="rounded-circle ms-2 me-2 mt-5">
          </div>
        </div>
      </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
