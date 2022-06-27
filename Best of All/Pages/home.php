<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Libray Work</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">
	<script src="https://kit.fontawesome.com/ea3a52adaa.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Best of All/Style/">

    

<link href="/Best of All/Style/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    


    <style>
      
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
            background-image: url(/Best\ of\ All/Images/1.jpg);
        }
        .bg-2{
            background-image: url(/Best\ of\ All/Images/2.jpg);
        }
        .bg-3{
            background-image: url(/Best\ of\ All/Images/3.jpeg);
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
     *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
nav{
    background-color: #18929D;
    padding: 10px 60px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
nav .logo a{
    text-decoration: none;
    color: #fff;
    font-size: 35px;
    font-weight: 600;
}
nav ul{
    display: flex;
    align-items: center;
    list-style: none;
    padding: 10px;
}
nav li{
    margin-left: 7px;
}
nav li a{
    text-decoration: none;
    color: #fff;
    font-size: 18px;
    font-weight: 500;
    padding: 8px 15px;
    border-radius: 5px;
    transition: 0.3s;
}
nav li a:hover{
    background-color: white;
    color: black;
}
.banner{
    height: 100vh;
    background: linear-gradient( rgba(0,0,0,0.281), rgba(0,0,0,0.308)),url('/Best\ of\ All/Images/background.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.texto .titulo{
    color: #fff;
    font-size: 60px;
    font-weight: 600;
}
.texto .sub_titulo{
    color: #fff;
    font-size: 58px;
    font-weight: 600;
}
.texto .botoes{
    margin-top: 30px;
}
.texto .botoes button{
    height: 55px;
    width: 170px;
    border-radius: 5px;
    border: 0;
    margin: 0 10px;
    font-size: 20px;
    font-weight: 500;
    padding: 0 10px;
    cursor: pointer;
    outline: none;
    transition: 0.3s;
}
.texto .botoes button.n-overlay{
    color: white;
    background: none;
    border: 2px solid white;
}
.texto .botoes button.n-overlay:hover{
    color: black;
    background-color: white;
}
.texto .botoes button.overlay{
    background: white;
    color: black;
    animation: vibrar 0.5s ease-in-out infinite both;
}
@keyframes vibrar {
    0%{
        transform: scale(1);
    }
    50%{
        transform: scale(1.1);
    }
    100%{
        transform: scale(1);
    }
}
body {
	background: #292b2c;
}
#testimonial_area {
	padding: 10% 0;
}
.box-area {
	padding: 30px;
	position: relative;
	display: block;
	background: #fff;
	color: #000;
	box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
	margin: 40px 0;
}
.box-area h5 {
	font-size: 16px;
	font-weight: 700;
	color: #0a69ed;
	margin-top: 30px;
	margin-bottom: 5px;
	text-transform: uppercase;
	letter-spacing: 1px;
}
.box-area span {
	color: #262626;
	display: block;
	font-size: 13px;
	margin: 0 0 10px;
	font-weight: 400;
}
.box-area .content {
	color: #262626;
}
.box-area .img-area {
	width: 90px;
	height: 90px;
	position: absolute;
	top: -40px;
	left: 0;
	bottom: 0;
	margin: 0 auto;
	right: 0;
	z-index: 1;
	border: 5px solid #fff;
	border-radius: 50%;
	box-shadow: 0 5px 4px rgba(0, 0, 0, 0.5);
}
.box-area .img-area img {
	width: 100%;
	height: auto;
	border-radius: 50%;
}
.socials {
	margin-top: 30px;
}
.socials i {
	margin: 0 10px;
	color: #0a69ed;
	font-size: 18px;
}
#testimonial_area .owl-nav {
	position: absolute;
	top: 50%;
	width: 100%;
}
#testimonial_area .owl-prev, #testimonial_area .owl-next {
	width: 40px;
	height: 40px;
	line-height: 40px;
	color: #0a69ed;
	border-radius: 50%;
	text-align: center;
	background: #fff;
	position: absolute;
}
#testimonial_area .owl-prev {
	left: -60px;
	top: -30px;
}
#testimonial_area .owl-next {
	right: -60px;
	top: -30px;
}
@media only screen and (max-width: 991px) {
	.owl-nav {
		display: none;
	}
}
@media only screen and (max-width: 767px) {
	.box-area {
		text-align: center;
	}
	.owl-nav {
		display: none;
	}
}
.modal{
    position: fixed;
    top:0;
    left:0;
    width: 100%;
    height: 100%;
    background: #00000090;
    opacity: 0;
    z-index: -1;
}

.modal.active{
    opacity: 1;
    z-index: 1;
}

.modal-content{
    display: flex;
    flex-direction: column;
    gap:20px;
    width: 50vw;
    margin: 15vh auto;
    padding-bottom: 20px;
    background-color: white;
    box-shadow: 1px 1px 10px black;
}

.modal-header{
    display: flex;
    position: relative;
    justify-content: center;
    height: 40px;
    line-height: 40px;
    font-size: 1rem;
}



.modal-close{
    position: absolute;
    right: 0;
    display: block;
    width: 40px;
    height: 40px;
    text-align: center;
    user-select: none;
    cursor: pointer;
}

.modal-close:hover{
    background-color: #FF4949;
    color: white;
}

.modal-form{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    padding: 0 20px;
}

.modal-field{
    width: calc(50% - 10px);
    height: 40px;
    outline-style: none;
    border-style: none;
    box-shadow: 0 0 2px black;
    padding: 0 10px;
    font-size:1rem;
}

.modal-field:focus{
    border: 2px solid var(--primary-color);
    box-shadow: 0 0 3px var(--primary-color);
}


.modal-footer{
    background-color: inherit;
    text-align: right;
    padding: 0 20px;
}

@media (max-width:480px){
    .modal{
        top:100%;
        transition: all 1s ease;
    }
    .modal.active{
        top:0;
    }
    .modal-content{
        margin:0;
        width:100%;
        position:fixed;
    }
    .modal-field{
        width:100%;
    }
}
    </style>

    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/Best of All/Style/product.css">
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
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
          <input type="search" class="form-control form-control-dark text-white bg-dark" placeholder="Pesquisar..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="cadastro.html">
          <button type="button" class="btn btn-outline-light me-2 button blue mobile" id="cadastrarCliente">Entrar</button>
          </a>
          <a href="carrinho.php">
          <button type="button" class="btn btn-warning">Registrar</button>
          </a>
        </div>
      </div>
    </div>
  </header>

<main>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active bg-1">      
      <div class="carousel-caption">
        <h5>Melhores para <span class="text-warning">ler</span></h5>
        <p>Livros de gêneros românticos para passar a tarde lendo na rede igual bainano.</p>
        <a href="#" class="bg-warning text-white">Alugue já</a>
      </div>
    </div>
    <div class="carousel-item bg-2">      
      <div class="carousel-caption">
        <h5>No mundo todo a <span class="text-warning">recordações</span></h5>
        <p>Leia livros de pesadelos na noite para se borrar todo.</p>
        <a href="#" class="bg-warning text-white">Leia mais</a>
      </div>
    </div>
    <div class="carousel-item bg-3">      
      <div class="carousel-caption">
        <h5>Orçamento <span class="text-warning">acessível</span></h5>
        <p>Caso esteja com uma cobra no bolso, não preocupe temos livros baratos e nas promoções.</p>
        <a href="#" class="bg-warning text-white">Bora krai</a>
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
  </div>
  
  
  <!--thumbnails-->
  <br>
  <!-- portfolio strats -->
  <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center text-white pb-5">
                        <h2 >Nossos projetos</h2>
                        <p>3 amostras de nosso site para começar uma aventura de curisosidade.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="/Best of All/Images/1livro.png" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Sapiens</h3>
                            <p class="lead">Nesse livro, o autor faz um apanhado histórico da humanidade, desde a coexistência do homo sapiens com outras espécies humanas até os avanços tecnológicos e políticos dos dias atuais.</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="/Best of All/Images/2livro.png" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Breves respostas para grandes questões</h3>
                            <p class="lead">O livro é uma coletânea de textos escritos pelo físico e astrônomo Stephen Hawking, que respondem a algumas questões feitas.</p>
                            <button class="btn bg-warning text-dark">learn More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                          <div class="img-area mb-4">
                              <img src="/Best of All/Images/3livro.png" class="img-fluid" alt="">
                          </div>
                            <h3 class="card-title">Ideias Para Adiar o Fim do Mundo</h3>
                            <p class="lead">O livro é uma compilação de ideias expostas por Ailton Krenak, um dos maiores pensadores indígenas do país. Propõe um novo modo de existência.</p>
                            <button class="btn bg-warning text-dark">Learn More</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
      <!-- portfolio ends -->
  <br>
  
 <!-- START TESTIMONIAL -->
 <section id="testimonial_area" class="section_padding">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="testmonial_slider_area text-center owl-carousel">
								<div class="box-area">	
									<div class="img-area">
										<img src="/Best of All/Images/robert.png" alt="">
									</div>	
									<h5>Robert</h5>
									<span>Full stack</span>									
									<p class="content">
									Os desenvolvedores full stack, ou full stack developers , são profissionais multifuncionais.
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-youtube"></i>
									</h6>
								</div> <!-- END SINGLE TESTIMONIALS -->	
							
								<div class="box-area">	
									<div class="img-area">
										<img src="/Best of All/Images/igor.png" alt="">
									</div>	
									<h5>Igor</h5>
									<span>Back end</span>									
									<p class="content">
									O backend é a estrutura que possibilita a operação do sistema, enquanto o front-end é responsável pela parte visual.
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-youtube"></i>
									</h6>
								</div> <!-- END SINGLE TESTIMONIALS -->	
							
								<div class="box-area">	
									<div class="img-area">
										<img src="/Best of All/Images/isaac.png" alt="">
									</div>	
									<h5>Isaac</h5>
									<span>Back end</span>									
									<p class="content">
									O backend é a estrutura que possibilita a operação do sistema, essas aplicações estão ligadas intimamente para que os ambientes.
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-youtube"></i>
									</h6>
								</div> <!-- END SINGLE TESTIMONIALS -->
							
								<div class="box-area">	
									<div class="img-area">
										<img src="/Best of All/Images/wilker.png" alt="">
									</div>	
									<h5>Wilker</h5>
									<span>Designer</span>									
									<p class="content">
									Quando adicionamos a palavra “gráfico”, estamos falando dos elementos visuais. Logo, design gráfico é desenvolver um projeto.
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-youtube"></i>
									</h6>
								</div> <!-- END SINGLE TESTIMONIALS -->
							
								<div class="box-area">	
									<div class="img-area">
										<img src="/Best of All/Images/yuri.png" alt="">
									</div>	
									<h5>Yuri</h5>
									<span>Cientista de dados</span>									
									<p class="content">
									specialistas analíticos que possuem as habilidades técnicas para resolver problemas complexos – e a curiosidade para explorar.
									</p>
									<h6 class="socials">
									    <i class="fa fa-instagram"></i>
									    <i class="fa fa-facebook"></i>
									    <i class="fa fa-linkedin"></i>
									    <i class="fa fa-youtube"></i>
									</h6>
								</div> <!-- END SINGLE TESTIMONIALS -->
							
							
							</div>
						</div>
					</div>
				</div>
			</section>
		<!-- END TESTIMONIAL -->

		<div class="b-example-divider"></div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-white">About</a></li>
    </ul>
    <p class="text-center text-white">&copy; 2022 Library Work, Inc</p>
  </footer>
</div>

		
		<script src="/Best of All/Script/cadastrar.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
		<script>
        $(".testmonial_slider_area").owlCarousel({
				autoplay: true,
				slideSpeed:1000,
				items : 3,
				loop: true,
				nav:true,
				navText:['<i class="fa fa-arrow-left"></i>','<i class="fa fa-arrow-right"></i>'],
				margin: 30,
				dots: true,
				responsive:{
					320:{
						items:1
					},
					767:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:3
					}
				}
				
			});
    
    </script>

</main> 


    <script src="/Best of All/Script/carrinho.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/Best of All/Script/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>   
  </body>
</html>
