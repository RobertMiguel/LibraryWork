<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
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
              <li class="nav-item">
                      <a class="nav-link"href="book.php">Livros</a>
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
    
    <div class="container">

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">Mundo</a>
          <a class="p-2 text-muted" href="#">Nacional</a>
          <a class="p-2 text-muted" href="#">Tecnologia</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Cultura</a>
          <a class="p-2 text-muted" href="#">Negócios</a>
          <a class="p-2 text-muted" href="#">Política</a>
          <a class="p-2 text-muted" href="#">Opiniões</a>
          <a class="p-2 text-muted" href="#">Ciência</a>
          <a class="p-2 text-muted" href="#">Saúde</a>
          <a class="p-2 text-muted" href="#">Estilo</a>
          <a class="p-2 text-muted" href="#">Viagem</a>
        </nav>
      </div>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
      <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Seja bem-vindo ao serviço de biblioteca da Manoel Mano</h1>
          <p class="lead my-3">Aqui você pode entrar na página de livros e escolher qual livro você quer alugar.</p>
          <img src="./Pictures  Books/Banner-Livros-da-Autora.png" alt="bannerlivrosdaautora">
        </div>
      </div>
        <br>
        <br>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary">Mais vendido</strong>
              <h3 class="mb-0">
              </h3>
              <p class="card-text mb-auto">Na década de 40, na Carolina do Sul, o operário Noah Calhoun e a rica Allie se apaixonam desesperadamente, mas os pais da jovem não aprovam o namoro. Noah então é enviado para combater na Segunda Guerra Mundial, e parece ser o fim do romance. Enquanto isso, Allie se envolve com outro homem. </p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="./Pictures  Books/diarioDaPaixao.png" alt="Card image cap">
            <a href="#" class="btn btn-dark">Alugar</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success">Design</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">Promoção</a>  
              </h3>
              <p class="card-text mb-auto">Muitas garotas sonham em ser princesas, mas este não é o caso de America Singer. Ela topa se inscrever na Seleção só para agradar a mãe, certa de que não será sorteada para participar da competição em que o príncipe escolherá sua futura esposa. Mas é claro que depois disso sua vida nunca mais será a mesma.</p>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" src="./Pictures  Books/selecaoKiera.png" alt="selecaokiera">
            <a href="#" class="btn btn-dark">Alugar</a>
          </div>
        </div>
      </div>
    </div>

   
        </aside><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

    <footer class="blog-footer">

      <p>
        <a href="#">Voltar ao topo</a>
      </p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>