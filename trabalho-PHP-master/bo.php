<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Ouvidoria de alunos</title>
</head>
<body>
    <header>
        <nav>
        <a class="logo" href="/">Ouvidoria de alunos</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list">
                <li><a href="inicio.php">Início</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>
                <li><a href="bo.php">BO</a></li>
                <li><a href="sugestoes.php">Sugestões</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
    <br>
            <h4>Registre seu boletim de ocorrência</h4>
            <br>
    <div class="row">
           <div class="col-sm-5">
                <label>Nome:</label> <input type="text" class="form-control">
            </div>
            <div class="row">
            <div class="col-3"><br>
                        <label>Motivo</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                            Bullying
                     </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                            Agressão
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                            Racismo
                     </label>
                        </div> <div class="form-check">
                            <input class="form-check-input" type="radio" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                            Preconceito
                     </label>
                        </div> <div class="form-check">
                            <input class="form-check-input" type="radio" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                            Descriminação
                     </label>
                        </div>
                    </div>
            </div>
     <div class="row">
     <div class="col-sm-5">
     <div class="mb-3"><br>
  <label for="" class="form-label">Faça a sua denuncia:</label>
  <textarea class="form-control" id="" rows="3"></textarea>
</div>
     </div>
     </div>
     <br>
        <div class="row ">
            <div class="col-sm-1 ">
                <button type="button " class="btn btn-primary ">Enviar</button>
            </div>
        </div>
    </div>
    </div>
</body>
</html>