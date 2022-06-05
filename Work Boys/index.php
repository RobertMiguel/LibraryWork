<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ouvidoria de alunos</title>
    <!--Link do BootStrap-->
    <link href="Style/https _getbootstrap.com_docs_5.2_dist_css_bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .cor{
          color: green;
      }
    </style>
    <header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ouvidoria Estudantil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="cadastro.php">Cadastro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="bo.php">BO</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" href="sugestoes.php">Sugestões</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="Images/eeepManoMano01.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption text-start cor">
            <h1>EEEP Manoel Mano</h1>
            <p>Deixe sugestões e registre-se no nosso site</p>
            <p><a class="btn btn-lg btn-primary" href="cadastro.php">Inscreva-se</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="Images/eeepManoMano02.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="50%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption cor">
            <h1>Crateús - CE</h1>
            <p>Umas das 10 melhores escolas do Ceará</p>
            <p><a class="btn btn-lg btn-primary" href="https://www.crateus.ce.gov.br/">Leia sobre</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="Images/eeepManoMano3.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>

        <div class="container">
          <div class="carousel-caption text-end cor">
            <h1>Faça seu BO</h1>
            <p>Criamos uma página para registração do BO</p>
            <p><a class="btn btn-lg btn-primary" href="bo.php">Faça seu BO</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Para que foi<span class="text-muted"> desenvolvido</span></h2>
        <br>
        <p class="lead"> Este site foi desenvolvido por estudantes da escola EEEP Manoel Mano, com o intuito de ouvir os alunos para buscar melhorias para nossa escola. Prezando sempre pela nossa instituição. O aluno pode se cadastrar em nosso site e fazer as devidas reclamações. O estudante também pode fazer sugestões com intuito de melhorar a nossa instituição de ensino. </p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./Images/logoep.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Home <span class="text-muted">Page</span></h2>
        <br>
        <p class="lead">O site da Home Page da escola é um site de comunicação projetado para servir como uma Home Page interna para a intranet da sua escola. É o local onde os alunos e professores podem ficar atualizados sobre eventos e notícias, acessar recursos escolares e muito mais. Ele também parece ótimo e funciona ótimo em qualquer dispositivo!</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./Images/imgEEEP.jpeg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Nós <span class="text-muted">ajude</span></h2>
        <br><br>
        <p class="lead">Depois de ter lido nossa home page, vá na aba de sugestões e deixa lá! Como podemos melhorar, no designe, o sistema do site.</p>
      </div>
      <div class="col-md-5">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="./Images/imgReliquia.png" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/></img>

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <div class="container marketing">
  <h2 class="featurette-heading fw-normal lh-1">Desenvolvedores <span class="text-muted">do Site</span></h2>
  <br><br>
  <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./Images/bigakecio.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        <h2 class="fw-normal">Big Akecio</h2>
        <p>Desenvolvedor web, programador PHP e WordPress. Procuro estar sempre a par das novidades para criar interfaces seguindo conceitos modernos e avançados, focadas na usabilidade e no design emocional.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./Images/paulin.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>

        <h2 class="fw-normal">Paulin</h2>
        <p>Sou graduado em Ciências da Computação pela UVV e Master in Business Administration (MBA) em Gestão Empresarial pela Fundação Getúlio Vargas.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./Images/camiloMatheus.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>

        <h2 class="fw-normal">Camilo Metheus</h2>
        <p>Já trabalhei em diversas empresas do ramo, mas hoje trabalho exclusivamente como Freelancer atendendo à diversas empresas de publicidade, auxiliando nos projetos e atendendo microempresários que necessitam de um projeto web.</p>
        
      </div>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <div class="container marketing">
  <br><br>
  <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./Images/manel.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>
        <h2 class="fw-normal">Manel</h2>
        <p>Estamos procurando um Desenvolvedor Full Stack para produzir soluções de software escaláveis. O profissional fará parte de uma equipe multidisciplinar responsável por todo o ciclo de vida de desenvolvimento de softwares, desde a concepção até a implantação.</p>
        
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="./Images/pk.jpeg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/></img>

        <h2 class="fw-normal">PK</h2>
        <p> Participar do projeto e criação de softwares escaláveis. Escrever códigos limpos e funcionais no front-end e no back-end. Testar e corrigir erros ou outros problemas de codificação.</p>
        
      </div><!-- /.col-lg-4 -->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

    <br>
    <br>


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Voltar para o topo</a></p>
    <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>
    <!--Script da página-->
    <script src="Style/https _getbootstrap.com_docs_5.2_dist_js_bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>