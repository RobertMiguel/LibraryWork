<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ouvidoria de alunos</title>
    <link rel="stylesheet" href="Style/https _getbootstrap.com_docs_5.2_dist_css_bootstrap.min.css">
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
    </style>
    <link rel="stylesheet" href="Style/https _getbootstrap.com_docs_5.2_examples_checkout_form-validation.css">
</head>
<body class="bg-light">

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
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="Images/logoep.png" alt="logoep" width="100" height="100">
      <h2>Formulário de Cadastro</h2>
      <p class="lead">Cada grupo de formulários obrigatório tem um estado de validação que pode ser acionado ao tentar enviar o formulário sem completá-lo.</p>
    </div>

    
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Endereço de Formulário</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Primeiro Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
              O nome válido é obrigatório.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
              O sobrenome válido é obrigatório.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nome do Usuário</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
              <div class="invalid-feedback">
              O nome do usuário válido é obrigatório.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
              Insira um endereço de e-mail válido para atualizações de envio.
              </div>
            </div>


            <div class="col-md-5">
              <label for="country" class="form-label">Sério</label>
              <select class="form-select" id="country" required>
                <option value="">Escolha...</option>
                <option>1°</option>
                <option>2°</option>
                <option>3°</option>
              </select>
              <div class="invalid-feedback">
                Por favor selecione seu email.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Turma</label>
              <select class="form-select" id="state" required>
                <option value="">Escolha...</option>
                <option>A</option>
                <option>B</option>
                <option>C</option>
                <option>D</option>
              </select>
              <div class="invalid-feedback">
                Por favor providencie sua turma.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Turno</label>
              <select class="form-select" id="state" required>
                <option value="">Escolha...</option>
                <option>Manhã</option>
                <option>Tarde</option>
                <option>Noite</option>
                <option>Integral</option>
              </select>
              <div class="invalid-feedback">
                Turno obrigatório
              </div>
            </div>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Curso</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Enfermagem</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Administração</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Comércio</label>
            </div>
          <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Informática</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Bairro</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <div class="invalid-feedback">
                Bairro é obrigatório.
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Rua</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Rua é obrigatório.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Número</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Número é obrigatório.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CEP</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                CEP é obrigatório.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Salvar</button>
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017–2022 EEEP Manoel Mano</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


    <script src="Style/https _getbootstrap.com_docs_5.2_dist_js_bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

      <script src="Style/https _getbootstrap.com_docs_5.2_examples_checkout_form-validation.js"></script>
  </body>
</html>