<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FreeTaxi | Conectando Motoristas e Passageiros: Viagens Personalizadas e Confiáveis!</title>
  <link rel="icon" href="svg/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Sora:wght@300;400;500;600&family=Source+Sans+Pro:wght@300;400;600&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <script src="./js/svg-inject.min.js"></script>
</head>
<body>


  <?php include('php/navbars.php'); ?>


  <div class="bg-home">
    <img class="svg-bg-home" src="./svg/bghome.png" alt="FreeTaxi">
  </div>



  <main class="container hero py-5">
    <div class="flex-item-1 py-3" data-aos="fade-up" data-aos-delay="200">
      <h1>Sua Viagem Perfeita com FreeTaxi </h1>
      <p class="my-2">
        "Conduzindo Sonhos, Ligando Destinos, Rápido, Confiável e Confortável,
        conectando motoristas e passageiros"
      </p>

      <div class="flex-start">
        <a href="#" class="btn dropshadow">Cadastre-se para dirigir</a>
      </div>
    </div>
    <div class="flex-item-3 flex-center div-card py-4" data-aos="fade-up" data-aos-delay="400">
       <img class="svg-taxi-bg" src="./svg/taxibg.svg" alt="FreeTaxi">
    </div>
  </main>





  <!-- DIGITAL ACCOUNT SECTION -->
  <section class="container">
    <div class="flex-item-1 p-2" data-aos="fade-up" data-aos-delay="200">
      <img class="w-100 dropshadow" src="./svg/taxiphone.svg" alt="" />
    </div>

    <div class="flex-item-3" data-aos="fade-up" data-aos-delay="200">
      <h5>Faça sua conta</h5>
      <h2 class="mt-2">Baixe. É gratuito.</h2>
      <p class="my-2">
        Descubra a maneira mais eficiente e conveniente de se locomover pela cidade baixando o FreeTaxi!.
        Com apenas alguns toques na tela do seu smartphone, você terá acesso a uma frota de táxis confiáveis prontos
        para te levar ao seu destino com
        segurança e rapidez.
      </p>
      <img class="button-app w-25" src="svg/app-store-black.svg" alt="" />
      <img class="button-app w-25" src="svg/google-play-black.svg" alt=""/>
    </div>
  </section>



  <section class="box" data-aos="fade-up" data-aos-delay="200">
    <?php include('php/testimony.php'); ?>
  </section>



  <div class="bg-invite flex-center relative">
    <section class="container">
      <div class="flex-item-1 flex-center flex-column content" data-aos="fade-up" data-aos-delay="0">
        <h5>JS Conta</h5>
        <h2 class="mt-2">O melhor do bancos digitais pra você.</h2>
        <p class="my-2">
          Venha fazer parte da revolução financeira com a JS Conta. Abra sua
          conta agora mesmo e descubra como é fácil e vantajoso gerenciar suas
          finanças com um banco digital feito para você!
        </p>
        <div>
          <a href="" class="btn dropshadow mr-2" style="display: block">Quero ser JSbank</a>
        </div>
      </div>
    </section>
  </div>




  <!-- PEOPLE SECTION -->
  <section class="container gap-2-5">
    <div class="flex-item-4 flex-column" data-aos="fade-up" data-aos-delay="0">
      <h5>Para todos</h5>
      <h2 class="mt-2">Completo.</h2>
      <p class="my-2">
        Resolva seu dia a dia pelo celular. Sem filas, sem anuidade, sem
        tarifas abusivas. Cuide do seu dinheiro de um jeito simples. Somos
        eficientes para você usar seu dinheiro com o que realmente importa,
        sem tarifas de manutenção.
      </p>
      <ul class="list mt-2 pt-2">
        <li class="list-item bg-icon-check">
          <strong>100% gratuito.</strong>
          <p>Isso mesmo, você não paga nada para abrir sua conta.</p>
        </li>
        <li class="list-item bg-icon-check">
          <strong>Sem taxas ou cobranças.</strong>
          <p>Não se preocupe com taxas adicionais ou anuidades.</p>
        </li>
        <li class="list-item bg-icon-check">
          <strong>O melhor suporte de todos.</strong>
          <p>Segundo pesquisas, temos o melhor suporte pra você.</p>
        </li>
      </ul>
      <p><a href="" class="link">Confira os benefícios</a></p>
    </div>
  </section>



  <!-- SCRIPTS -->
  <script src="js/app.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init({
      easing: "ease-out-quart",
      duration: 1000,
      once: true,
    });
  </script>
</body>

</html>