<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Biblioteca</title>
</head>

<!-- 
    LINK PARA VER A DOCUMENTAÇÃO DO BOOTSTRAP PARA ESSES CASOS
    https://getbootstrap.com/docs/5.1/layout/gutters/
-->
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
              </li>
              <li class="nav-item">
                <a class="nav-link " href="book.php">Livros</a>
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

    <div class="container px-4">
        <!-- Início Formulário 1 -->
        <div class="row gx-5">
            <div class="col">
                <div class="p-3 border bg-light">
                    <h1>Cadastro</h1>
                    <form action="" method="post">
                        <div class="col-sm">
                            <label for="">Nome:</label>
                            <input type="text" name="nome" id="" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="">Email:</label>
                            <input type="email" name="email" id="" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="">Endereço:</label>
                            <input type="text" name="Endereco" id="" class="form-control"> 
                        </div>
                        <div class="col-sm">
                            <label for="">Cidade:</label>
                            <input type="text" name="cidade" id="" class="form-control">
                        </div>     
                        <div class="col-sm">
                            <label for="">Estado:</label>
                            <select name="estado" id="" class="form-control">
                            <option selected>Selecione seu estado</option>
                            <option value="sp">São Paulo</option>
                            <option value="ce">Ceara</option>
                            <option value="ba">Bahia</option>
                            <option value="df">Distrito Federal</option>
                            <option value="ma">Maranhão</option>
                            <option value="ac">Acre</option>
                            <option value="am">Amazonas</option>
                            <option value="al">Alagoas</option>
                            <option value="rj">Rio de Janeiro</option>
                            <option value="mg">Minas Gerais</option>
                            <option value="rs">Rio Grande do Sul</option>
                            <option value="mt">Mato Grosso</option>
                            <option value="sc">Santa Catarina</option>
                            <option value="pr">Parana</option>
                            <option value="es">Espirito Santo</option>
                            <option value="pi">Piaui</option>
                            <option value="rn">Rio Grande do Norte</option>
                            <option value="pb">Paraiba</option>
                            <option value="pe">Pernambuco</option>
                            <option value="se">Sergipe</option>
                            <option value="ms">Mato Grosso do Sul</option>
                            <option value="go">Goias</option>
                            <option value="to">Tocantins</option>
                            <option value="pa">Para</option>
                            <option value="rr">Roraima</option>
                            <option value="ap">Amapa</option>
                            <option value="ro">Rodonia</option>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-dark">Salvar</button>
                    </form>
                </div>
            </div>
        <!-- Final Formulário 1 -->
        
        <!-- Início Formulário 2 -->
            <div class="col">
                <div class="p-3 border bg-light">
                    <h1>InfoBook</h1>
                    <form action="" method="post">
                        <div class="col-sm">
                            <label for="">Título e subtítulo:</label>
                            <input type="text" name="nome" id="" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="">Autor(a):</label>
                            <input type="text" name="autor" id="" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="">Categoria:</label>
                            <input type="text" name="categoria" id="" class="form-control">
                        </div>
                        <div class="col-sm">
                            <label for="">Código de Barras</label>
                            <input type="number" name="cod-barras" id="" class="form-control">
                        </div>  
                        <br>
                        <button type="submit" class="btn btn-dark">Salvar</button>
                    </form>
                </div>
            </div>
        <!-- Final Formulário 2 -->
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>

</body>

</html>