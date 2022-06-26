<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Work</title>
    <link rel="stylesheet" href="/Best of All/Style/bootstrap.min.css">
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
.navbar-nav a {
	font-size: 15px;
	text-transform: uppercase;
	font-weight: 700;
            text-shadow: 0 2px 2px rgba(0,0,0,0.5);
}
.navbar-light .navbar-brand {
	color: #fff;
	font-size: 25px;
	text-transform: uppercase;
	font-weight: bold;
	letter-spacing: 2px;
}
        
.navbar-light .navbar-brand:focus,
.navbar-light .navbar-brand:hover {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link {
	color: #fff;
}
.navbar-light .navbar-nav .nav-link:focus,
.navbar-light .navbar-nav .nav-link:hover {
	color: yellow;
}

.navbar-toggler {
	padding: 1px 5px;
	font-size: 18px;
	line-height: 0.3;
	background: #fff;
}
        
        
/*  carousel      */
        
        .carousel-item {
	height: 100vh;
	min-height: 300px;
}
        .bg-1{
            background-image: url(/Best\ of\ All/Images/1l.png);
        }
        .bg-2{
            background-image: url(/Best\ of\ All/Images/2l.jpg);
        }
        .bg-3{
            background-image: url(/Best\ of\ All/Images/3l.jpg);
        }
        .bg-1, .bg-2, .bg-3{
            -webkit-background-size: cover;
            background-size: cover;
        }
.carousel-caption {
	bottom: 220px;
    z-index: 2;
}
.carousel-caption h5 {
	font-size: 85px;
	text-transform: capitalize;
	letter-spacing: 2px;
	margin-top: 25px;
	font-family: 'Moon Dance', cursive;
}
.carousel-caption p {
	width: 60%;
	margin: auto;
	font-size: 18px;
	line-height: 1.9;
}
        
       
.carousel-caption a {
	text-transform: uppercase;
	text-decoration: none;
	padding: 5px 20px;
	display: inline-block;
	color: #fff;
	margin-top: 15px;
	border-radius: 5px;
}
    
  .carousel-inner:before {
  content: '';
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.6);
  z-index: 1;
}      
        .carousel-indicators {
	bottom: 65px;
}
        .carousel-indicators button {
	width: 100px !important;
}
        
        
        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .navbar-nav {
		text-align: center;
		
	}
            .navbar-collapse {
	background: #fff;
}
            .navbar-collapse .nav-item .nav-link {
	color: #000;
}
            .carousel-caption {
		bottom: 350px;
	}
            .carousel-caption h5 {
	font-size: 65px;
}
            .carousel-caption p {
		font-size: 18px;
        width: 100%;
	}
        }        
        
@media only screen and (max-width: 767px) {
	.navbar-nav {
		text-align: center;
		
	}
    .navbar-collapse .nav-item .nav-link {
	color: #000;
}
    
	.carousel-caption {
		bottom: 165px;
	}
	.carousel-caption h5 {
		font-size: 25px;
	}
	.carousel-caption p {
		font-size: 12px;
        width: 100%;
	}
	.carousel-caption a {
		padding: 10px 15px;
		font-size: 15px;
	}
    .navbar-collapse {
	background: #fff;
}
    
    
}
    </style>
</head>
<body>
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="home.php" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="produtos.php" class="nav-link px-2 text-white">Produtos</a></li>
          <li><a href="apoidor.php" class="nav-link px-2 text-white">Apoiador</a></li>
          <li><a href="carrinho.php" class="nav-link px-2 text-white">Carrinho</a></li>
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Autores
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">JK Rowling</a></li>
            <li><a class="dropdown-item" href="#">Augusto Cury</a></li>
            <li><a class="dropdown-item" href="#">Pedro Lenza</a></li>
            <li><a class="dropdown-item" href="#">Stephen King</a></li>
        </ul>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Autoajuda</a></li>
            <li><a class="dropdown-item" href="#">Direito</a></li>
            <li><a class="dropdown-item" href="#">Adminstração</a></li>
            <li><a class="dropdown-item" href="#">Didáticos</a></li>
            <li><a class="dropdown-item" href="#">HQs e Mangás</a></li>
            <li><a class="dropdown-item" href="#">Medicina</a></li>
        </ul>
        
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Pesquisar..." aria-label="Search">
        </form>

        <div class="text-end">
          <button type="button" class="btn btn-outline-light me-2">Entrar</button>
          <button type="button" class="btn btn-warning">Cadastre-se</button>
        </div>
        
      </div>
</div>
        

  </header>


   
   <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active bg-1">      
      <div class="carousel-caption">
        <h5>Melhor em<span class="text-warning">Turismo</span></h5>
        <p>Leia livros românticos para começar sofrer pela a morena e é isso.</p>
        <a href="#" class="bg-warning text-white">Venha ler</a>
      </div>
    </div>
    <div class="carousel-item bg-2">      
      <div class="carousel-caption">
        <h5>Livros de <span class="text-warning">recomendação</span></h5>
        <p>Biografias e livros de escritos super gente fina, compre agora.</p>
        <a href="#" class="bg-warning text-white">Vamos</a>
      </div>
    </div>
    <div class="carousel-item bg-3">      
      <div class="carousel-caption">
        <h5>Livros <span class="text-warning">Aleatórios</span></h5>
        <p>Está cansado de fazer ? Então vai procurar algo pra fazer umas delas é ler</p>
        <a href="#" class="bg-warning text-white">FDS já</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  
  
  
  <!--thumbnails-->
  
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"><img class="d-block w-100" src="/Best of All/Images/1l.png" class="img-fluid"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"><img class="d-block w-100" src="/Best of All/Images/2l.jpg" class="img-fluid"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"><img class="d-block w-100" src="/Best of All/Images/3l.jpg" class="img-fluid"></button>
  </div>
</div>

<br>

<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Exemplos de livros</h1>
        <p class="lead text-muted">Alguns livros aleatórios para poder ler ou conseguir se identificar ao mais próximo.</p>
        <p>
          <a href="#" class="btn btn-primary my-2">Primeira página do albúm</a>
          <a href="#" class="btn btn-secondary my-2">Segunda página</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-dark">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/aGarotaDoLago.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text">Descrição. Summit Lake, uma pequena cidade entre montanhas, é esse tipo de lugar, bucólico e com encantadoras casas dispostas à beira de um longo.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/biblia.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text">A Bíblia é uma coleção ou compilação de livros sagrados, contendo as histórias, doutrinas, códigos e tradições que guiam os cristãos.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/dracula.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text">Jonathan Harker, um jovem advogado inglês de Londres, comprometido com a jovem e bela professora assistente Wilhemina Murray (Mina).</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/itACoisa.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>

            <div class="card-body">
              <p class="card-text">Naquele verão, eles enfrentaram pela primeira vez a Coisa, um ser sobrenatural e maligno que deixou terríveis marcas de sangue em Derry.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/nordicos.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></svg>

            <div class="card-body">
              <p class="card-text">Estamos falando de uma tradição literária muito complexa, rica em símbolos, mitos, ritos e personagens que transitam entre histórias.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/harryPotter.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text">Harry Potter é uma série de sete romances de fantasia escrita pela autora britânica J. K. Rowling. A série narra as aventuras de um jovem.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/parcyJackson.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text">Percy Jackson & the Olympians é uma série literária composta por cinco livros de aventura, romance, suspense e fantasia, escritos pelo estadunidense.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/doMilaoMilhao.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text">Em seu primeiro livro, Thiago Nigro, criador da plataforma O Primo Rico, ensina aos leitores os três pilares para atingir a independência financeira.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="/Best of All/Images/senhorDosAneis.png" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/></img>

            <div class="card-body">
              <p class="card-text">Numa cidadezinha indolente do Condado, um jovem hobbit é encarregado de uma imensa tarefa. Deve empreender uma perigosa.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                <div class="btn-group">
                    <button href="#" class="btn btn-dark">Alugar</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>