<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <!--Header da Página-->
    <nav class="navbar bg-dark">
    <div class="container-fluid">
        
    <div class="badge  text-wrap" style="width: 6rem;">
    (88) 9376-1551
    </div>
    <div class="badge  text-wrap" style="width: 6rem;">
    bibli@gmail.com
    </div>
    </nav>
    <!--Final do Header da Página-->

    <!--Imagem para Logo-->
    <img src="./Images/image-removebg-preview.png" class="img-fluid" alt="logo">

    <!--NavBar da página-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="myaccount.php">Minha Conta</a>
              </li>
            </ul>
          </div>
        </div>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success bg-dark" type="submit">Pesquisar</button>
          </form>
        </nav>
      <!--Final da NavBar da página-->

      <!--Começo do Carousel da página-->
            <div id="carouselExampleIndicators" class="carousel slide" bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" bs-target="#carouselExampleIndicators" bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" bs-target="#carouselExampleIndicators" bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" bs-target="#carouselExampleIndicators" bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./Images/BannerAlugue.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="./Images/BannerAlugueLivro.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="./Images/BannerAlugueArte.png" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" bs-target="#carouselExampleIndicators" bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" bs-target="#carouselExampleIndicators" bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    <!--Final do Carousel da página-->

    <br>

        <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Livros Disponíveis</h1>
          <p class="lead text-muted">Livros aleatórios para ler e passar seu tempo</p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/biblia.png" alt="">
                <div class="card-body">
                  <p class="card-text">A Bíblia é uma coleção ou compilação de livros sagrados, contendo as histórias, doutrinas, códigos e tradições que guiam os cristãos, com base na tradição judaica (Antigo Testamento) e na divulgação do Evangelho (Novo Testamento).</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/dracula.png" alt="dracula">
                <div class="card-body">
                  <p class="card-text">Jonathan Harker, um jovem advogado inglês de Londres, comprometido com a jovem e bela professora assistente Wilhemina Murray (Mina), se encontra na cidade de Bistritz e viajará até a Transilvânia, uma das regiões mais remotas da Hungria nessa época, para fechar negócio com o conde Drácula.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">12 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/itACoisa.png" alt="itacoisa">
                <div class="card-body">
                  <p class="card-text">Naquele verão, eles enfrentaram pela primeira vez a Coisa, um ser sobrenatural e maligno que deixou terríveis marcas de sangue em Derry. Quase trinta anos depois, os amigos voltam a se encontrar. Uma nova onda de terror tomou a pequena cidade, e somente eles serão capazes de enfrentar a Coisa.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">15 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/nordicos.png" alt="">
                <div class="card-body">
                  <p class="card-text">Estamos falando de uma tradição literária muito complexa, rica em símbolos, mitos, ritos e personagens que transitam entre histórias. Para evitar uma confusão constante entre os seres mitológicos e elementos simbólicos da mitologia escandinava, Johnni Langer elaborou um completíssimo “Dicionário de Mitologia Nórdica”.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">18 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/harryPotter.png" alt="harrypotter">
                <div class="card-body">
                  <p class="card-text">Harry Potter é uma série de sete romances de fantasia escrita pela autora britânica J. K. Rowling. A série narra as aventuras de um jovem chamado Harry James Potter, que descobre aos 11 anos de idade que é um bruxo ao ser convidado para estudar na Escola de Magia e Bruxaria de Hogwarts.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">20 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/parcyJackson.png" alt="percyjackson">
                <div class="card-body">
                  <p class="card-text">Percy Jackson & the Olympians é uma série literária composta por cinco livros de aventura, romance, suspense e fantasia, escritos pelo estadunidense Rick Riordan, que retrata a mitologia grega no século XXI.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">21 mins</small>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/aGarotaDoLago.png" alt="agarotadolago">
                <div class="card-body">
                  <p class="card-text">Descrição. Summit Lake, uma pequena cidade entre montanhas, é esse tipo de lugar, bucólico e com encantadoras casas dispostas à beira de um longo trecho de água intocada. Duas semanas atrás, a estudante de direito Becca Eckersley foi brutalmente assassinada em uma dessas casas.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/doMilaoMilhao.png" alt="domilaomilao">
                <div class="card-body">
                  <p class="card-text">Em seu primeiro livro, Thiago Nigro, criador da plataforma O Primo Rico, ensina aos leitores os três pilares para atingir a independência financeira: gastar bem, investir melhor e ganhar mais. Por meio de dados e de sua própria experiência como investidor e assessor, Nigro mostra que a riqueza é possível para todos – basta estar disposto a aprender e se dedicar.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">25 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/senhorDosAneis.png" alt="senhordosaneis">
                <div class="card-body">
                  <p class="card-text">Numa cidadezinha indolente do Condado, um jovem hobbit é encarregado de uma imensa tarefa. Deve empreender uma perigosa viagem através da Terra-média até as Fendas da Perdição, e lá destruir o Anel do Poder - a única coisa que impede o domínio maléfico do Senhor do Escuro.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">27 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/paiRicoPaiPobre.png" alt="pairicopaipobre">
                <div class="card-body">
                  <p class="card-text">Pai Rico, Pai Pobre é o primeiro best-seller de Robert Kiyosaki e Sharon Lechter. Ele advoga a busca pela independência financeira através de investimento, imóveis, ter seu próprio negócio e o uso de táticas financeiras de proteção do patrimônio.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">30 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/pequenoPrincipe.png" alt="pequenoprincipe">
                <div class="card-body">
                  <p class="card-text">Le Petit Prince é uma novela do escritor, aviador aristocrata francês Antoine de Saint-Exupéry, originalmente publicada em inglês e francês em abril de 1943 nos Estados Unidos. Durante a Segunda Guerra Mundial, Saint-Exupéry foi exilado para a América do Norte.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">35 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="./Pictures  Books/mulheresQueCorremComOsLobos.png" alt="senhordosaneis">
                <div class="card-body">
                  <p class="card-text">Mulheres que Correm com os Lobos: Mitos e Histórias do Arquétipo da Mulher Selvagem é um livro da analista, autora e poetisa junguiana Clarissa Pinkola Estés, Ph.D., publicado em 1992 pela Ballantine Books.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#" class="btn btn-dark">Alugar</a>
                    </div>
                    <small class="text-muted">40 mins</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    
        <!--Final dos Cards da página-->


 <!--Script da paǵina-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
<!--Final do script da página-->
</body>
</html>