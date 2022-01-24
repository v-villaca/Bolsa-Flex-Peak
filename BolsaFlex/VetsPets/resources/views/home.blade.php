@extends('layouts.main') 

@section('title' , 'Vets e Pets')

@section('content')
     

    <section class="bgYellow fw-bolder padTop">
        <div class="container">
            <div class="row">
                <div class="col-md-6 padTop">
                    <h1 class="bgYellow fw-bolder text-start">Profissionais de todas as especialidades são encontrados aqui!</h1>
                    <h5 class="bgYellow  text-start">A Vets e Pets busca ligar você, pet lover, ao profissional que melhor se encaixa ao que você precisa, nós somos o maior catálogo de profissionais do Brasil!</h5>
                    <a href="/pesquisa" class="text-decoration-none"><button class="btn bgBlue me-3 p-2 mt-3 rounded btnPesqBlue" type="submit" href="/pesquisa">Catálogo</button></a>
                      <button class="btn bgYellow ms-3 p-2 mt-3 border border-white btnPesqYellow" type="submit" href="#">Serviços</button>
                </div>

                <div class="col-md-6">
                    <img class="ms-5" src="/css/img/buldog.png" width="400px">
                </div>
            </div>
        </div>
    </section>

    <section>
      <div class="container padTop">
        <div class="row">
          <div class="col-md-6 mt-5" data-anime="left">
            <h2 class="blueFont fw-bolder text-start">Feito por quem ama, para quem ama e quer cuidar.</h2>
            <h5 class="blueFont text-start"> Temos um time de experts fazendo a análise de todos os profissionais que se cadastram no site para garantir a você que apenas quem ama e cuida irá atender o seu querido baby!</h5>
            <div class="text-start">
              <button class="btn bgYellow p-2 mt-2 btnPesqYellow" type="submit" data-anime="left">PetLovers</button>
            </div>
            
          </div>

          <div class="col-md-6">
              <div>
                <img class="videoDog ms-5" src="/css/img/Shape.png" width="370px">
              </div>
              <div>
                <img class="videoDog ms-5" src="/css/img/quadrado.png" width="370px">
              </div>
              <div>
                <img class="btnVideoDog" src="/css/img/botao-play.png" width="50px">              
          </div>
            <img id="bgQuadrado" src="/css/img/quadradoAmareloDeFundo.png" width="190px"> 
        </div>
      </div>
      </div>
    </section>

    <section class="bgYellow fw-bolder padTop">
      <h2 class="text-center bgYellow fw-bolder fs-1">Serviços</h2>
      <h4 class="text-center bgYellow terceiraSection mt-3">A Vets e Pets disponibiliza desconto para profissionais que usam nossa infraestrutura.</h4>
      <div class="row marginLeftImg marginRightImg">
        <div class="col-md-4 text-center">
          <img src="/css/img/veterinarian.png" data-anime="left">
          <h2 class="bgYellow fw-bolder mt-4" data-anime="left">Consulta</h2>
            <p class="bgYellow mt-2 ms-5 me-5" data-anime="left"> Faça um check-up para saber se esta tudo bem com a saúde do pet!</p>
        </div>

        <div class="col-md-4 text-center">
          <img src="/css/img/vacination.png" data-anime="left">
          <h2 class="bgYellow fw-bolder mt-4" data-anime="left">Dentista</h2>
          <p class="bgYellow mt-2 ms-5 me-5" data-anime="left">Ninguém merece aquela dorzinha de dente chata né?!!!</p>
        </div>
          
        <div class="col-md-4 text-center">
          <img src="/css/img/dentalCare.png" data-anime="left">
          <h2 class="bgYellow fw-bolder mt-4" data-anime="left">Fisioterapeuta</h2>
          <p class="bgYellow  mt-2 ms-5 me-5" data-anime="left">Nós sabemos muito bem que eles não sossegam né?! Não tem problema, temos os melhores profissionais a disposição!</p>
        </div>
      </div>
    </section>


    <section>
      <div class="container padTop">
        <div class="row">
          <div class="col-md-6">
            <div>
              <img class="videoDog ms-5" src="/css/img/orelhadog.png" width="370px">
            </div>
            <div>
              <img class="videoDog ms-5" src="/css/img/quadrado.png" width="370px">
            </div>
            <div>
              <img class="btnVideoDog" src="/css/img/botao-play.png" width="50px">              
        </div>
          <img id="bgQuadrado2" src="/css/img/quadradoAmareloDeFundo.png" width="190px"> 
      </div>

          <div class="col-md-6 mt-5" >
            <h2 class="blueFont fw-bolder text-end" data-anime="right">Quem ama cuida!</h2>
            <h5 class="blueFont text-end" data-anime="right">É de extrema importância que seja feita regurlamente o check-up da saúde dos nossos pets!</h5>
            <div class="text-end">
              <button class="btn bgYellow p-2 mt-2 btnPesqYellow" type="submit" data-anime="right"> Nossos Serviços</button>
            </div>
            
          </div>
      </div>
      </div>
    </section>
   

    <section class="bgYellow fw-bolder padTop">
      <h2 class="text-center bgYellow fw-bolder fs-1">Doe e Salve!</h2>
      <h4 class="text-center bgYellow terceiraSection mt-3">Ao aderir ao plano mensal da Vets e Pets você tem desconto em nosso produtos, e 50% da renda é redirecionada para ajudar animais desabrigados!</h4>
      <div class="row marginLeftImg marginRightImg">
        <div class="col-md-4 text-center">
          <img src="/css/img/bullDog50rs.png">
          <div class="row">
            <div class="col-md-6 text-center">
              <h2 class="bgYellow fw-bolder mt-4 text-decoration-line-through marginLeftBtnDogs ms-5 ps-5"  data-anime="left">R$80</h2>
            </div>
            <div class="col-md-6 text-center">
              <h2 class="bgYellow fw-bolder mt-4 marginRightBtnDogs me-5 pe-5"  data-anime="left">R$50</h2>
            </div>
          </div>
          <button class="btn bgBlue ps-4 pe-4 mt-2 rounded-pill btnPesqBlue" type="button" href="#"  data-anime="left"> Mensal </button>
        </div>

        <div class="col-md-4 text-center">
          <img src="/css/img/dogDoMeio25rs.png">
          <div class="row">
            <div class="col-md-6 text-center">
              <h2 class="bgYellow fw-bolder mt-4 text-decoration-line-through marginLeftBtnDogs ms-5 ps-5">R$60</h2>
            </div>
            <div class="col-md-6 text-center">
              <h2 class="bgYellow fw-bolder mt-4 marginRightBtnDogs me-5 pe-5">R$40</h2>
            </div>
          </div>
          <button class="btn bgBlue ps-4 pe-4 mt-2 rounded-pill btnPesqBlue" type="button" href="#"> Trimestral </button>
        </div>
          
        <div class="col-md-4 text-center">
          <img src="/css/img/terceiroDog20rs.png" >
          <div class="row">
            <div class="col-md-6 text-center">
              <h2 class="bgYellow fw-bolder mt-4 text-decoration-line-through marginLeftBtnDogs ms-5 ps-5" data-anime="right">R$50</h2>
            </div>
            <div class="col-md-6 text-center">
              <h2 class="bgYellow fw-bolder mt-4 marginRightBtnDogs me-5 pe-5" data-anime="right">R$20</h2>
            </div>
          </div>
          <button class="btn bgBlue ps-4 pe-4 mt-2 rounded-pill btnPesqBlue" type="button" href="#" data-anime="right"> Semestral </button>
        </div>
      </div>
    </section>


    <section class="padTop">
      <h2 class="text-center blueFont fw-bolder fs-1">Profissionais em Destaque</h2>
      <h4 class="text-center blueFont terceiraSection mt-3">Conheça alguns de nossos colaboradores que nosso clientes mais buscam!</h4>
      <div class="row marginLeftImg marginRightImg">
        <div class="col-md-4 text-center">
          <img src="/css/img/medicaEsquerda.png" width="300px" class="ms-5">
          <h2 class="blueFont fw-bolder mt-4 ms-5">Jennifer Laurence</h2>
          <h4 class="blueFont mt-2 ms-5">Anestesista</h4>
          <img src="/css/img/Instagram.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/Facebook.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/Twitter.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/WhatsApp.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
        </div>

        <div class="col-md-4 text-center">
          <img src="/css/img/medicaMeio.png" width="300px">
          <h2 class="blueFont fw-bolder mt-4">Josefina Amaral</h2>
          <h4 class="blueFont mt-2 ms-5 me-5">Fisioterapeuta</h4>
          <img src="/css/img/Instagram.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/Facebook.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/Twitter.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/WhatsApp.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
        </div>
          
        <div class="col-md-4 text-center">
          <img src="/css/img/medicaDireita.png" width="300px" class="me-5">
          <h2 class="blueFont fw-bolder mt-4 me-5">Luciana Souza</h2>
          <h4 class="blueFont mt-2 me-5">Vterinaria Geral</h4>
          <img src="/css/img/Instagram.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/Facebook.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/Twitter.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
          <img src="/css/img/WhatsApp.png" href="" class="bgYellow rounded-circle ms-2 me-2 mt-3">
        </div>
      </div>
    </section>


    <section id="estatisticas">  
      <div class="row text-center mt-5" id="estatPadding">
        <div class="col-md-4">
          <img src="/css/img/coração.png" data-anime="left">
          <h2 class="fw-bolder mt-5" data-anime="left">+6521</h2>
          <h2 class="fw-bolder mt-3" data-anime="left">Pet Lifes Salvas</h2>
        </div>

        <div class="col-md-4">
          <img src="/css/img/fondeDeMedico.png">
          <h2 class="fw-bolder mt-5">+9652</h2>
          <h2 class="fw-bolder mt-3">Atendimentos</h2>
        </div>

        <div class="col-md-4">
          <img src="/css/img/agulha.png" data-anime="right">
          <h2 class="fw-bolder mt-5" data-anime="right">+3452</h2>
          <h2 class="fw-bolder mt-3" data-anime="right">Vacinações</h2>
        </div>
      </div>
    </section>


    <section class="padTop">
      <h2 class="text-center blueFont fw-bolder fs-1">Nossos clientes</h2>
      <h4 class="text-center blueFont terceiraSection mt-3">Alguns atendimentos realizados em nossa infraestrutura!</h4>
        <div class="container">
          <div class="row fw-bolder">
            <div class="col-md-4">
              <div>
                <img src="/css/img/lastSectionLeft.png" class="fixSize">
              </div>
              <div class="borderLastSection fixSize">
                <h2 class="blueFont fw-bolder ps-4 pt-3">Check-up</h2>
                <p class="ps-4 colorLastSectionClaro">15 de Abril de 2021</p>
                <p class="blueFont ps-4">Um garotão de 4 aninhos verificando se esta tudo ok com seu buchinho, nada de vermes por aqui!</p>
                <a href="/" class="text-decoration-none"><h4 class="fw-bolder ps-4 py-3 colorLastSectionEscuro readEffects">Leia Mais +</h4></a>
              </div>
            </div>
            <div class="col-md-4 fw-bolder shadow">
              <div>
                <img src="/css/img/lastSectionCenter.png" class="fixSize">
              </div>
              <div class="fixSize">
                <h2 class="blueFont fw-bolder ps-4 pt-3">Medicação</h2>
                <p class="ps-4 colorLastSectionClaro">28 de Maio de 2021</p>
                <p class="blueFont ps-4">"Ei moça, o que é isso? Quero!" ta dificil dar a medicação em casa? Trás pra Vets e Pets!</p>
                <a href="/" class="text-decoration-none"><h4 class="fw-bolder ps-4 py-3 colorLastSectionEscuro readEffects">Leia Mais +</h4></a>
              </div>
            </div>
            <div class="col-md-4 fw-bolder">
              <div>
                <img src="/css/img/lastSectionRight.png" class="fixSize">
              </div>
              <div class="borderLastSection fixSize">
                <h2 class="blueFont fw-bolder ps-4 pt-3">Checagem</h2>
                <p class="ps-4 colorLastSectionClaro">13 de Outubro de 2021</p>
                <p class="blueFont ps-4">Checando os dentinhos do goiabada, afinal ninguém merece dor de dente né, muito menos eles!!</p>
                <a href="/" class="text-decoration-none"><h4 class="fw-bolder ps-4 py-3 colorLastSectionEscuro readEffects">Leia Mais +</h4></a>
              </div>
            </div>
          </div>
        </div>
    </section>   

<script>
  const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll(){
  const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
  target.forEach(function(element){
    if((windowTop) > element.offsetTop){
      element.classList.add(animationClass)
    }else{
      element.classList.remove(animationClass)
    }
  })
}

animeScroll();

if(target.length){
  window.addEventListener('scroll', function() {
  animeScroll();
});
}
 </script> 

@endsection