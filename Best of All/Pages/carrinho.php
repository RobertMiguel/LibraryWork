<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/Best of All/Script/main.js" defer></script>
    <title>Library Work</title>
    <!--<link rel="stylesheet" href="/Best of All/Style/carrinho.css">-->
    <style>
        .button{
    border-style: none;
    height: 40px;
    padding: 6px 12px;
    background-color: black;
    color: white;
    font-size: 1rem;
    cursor: pointer;
    transition: box-shadow .6s ease;
}

.button.blue{
    background-color: #1FB6FF;
}

button.green{
    background-color: #13CE66;
}

button.red{
    background-color: #FF4949;
}

.button:hover{
    box-shadow: inset 200px 0 0 #00000055;
}

@media(max-width:480px){
    .button.mobile{
        color:transparent;
        font-size:0;
        width:50px;
        height:50px;
        border-radius: 50%;
        position:fixed;
        top: 90vh;
        left: 80vw;
    }
    .button.mobile::before{
        content: "+";
        color:black;
        font-size:2rem;
        width:100%;
        height:100%;
    }
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

:root{
    --primary-color: #1a1918;
    --secundary-color: #FFF1CC;
    --shadow-color: #CCC;
    --text-color: #FFF;
}

body{
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    font-family: 'karla', sans-serif;
    position:relative;
}
h2{
    color: white;
}
header{
    background-color: var(--primary-color);
    height: 70px;
    text-align: center;
    line-height: 70px;
    box-shadow: 0 1px 2px var(--shadow-color);
}

.header-title{
    color: white;
    font-size: 2rem;
}

main{
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 90%;
    margin: 5vh auto;
    padding: 50px;
    box-shadow: 2px 2px 10px var(--shadow-color);
    gap: 20px;
}

footer{
    width:100;
    text-align: center;
    font-weight: 200;
    font-style: italic;
    padding: 20px;
}

@media (max-width:480px){
    header{
        position:fixed;
        width:100%;
    }
    .header-title{
        font-size: 1.5rem;
        background-color: #1a1918;
        color: #FFF;
    }

    main{
        padding: 0;
        margin: 20px 0 0 0;
        width:100%;
        box-shadow: none;
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
.records{
    width: 100%;
    user-select: none;
    text-align: left;
}

.records th{
    height: 50px;
    color: white;
    background-color: var(--primary-color);
    padding-left: 20px;
    font-size: 1.2rem;    
}
.records td{
    height: 50px;
    padding-left: 20px;
}

.records th:last-child,
.records td:last-child{
    padding: 0;
    min-width: 140px;
    text-align: center;
}

.records tr:hover{
    background-color: var(--secundary-color);
}

@media(max-width:480px){
    .records{
        border-spacing: 5px;
    }
    .records thead{
        display:none;
    }
    .records tr{
        box-shadow: 0 1px 3px var(--shadow-color);
    }
    .records td:not(:first-child){
        display:flex;
        justify-content: space-between;
        padding: 0 20px;
    }

    .records td{
        margin:10px 0;
    }

    .records tr:hover{
        background-color: inherit;
    }
}
    </style>
</head>

<body>
    <header>
        <h1 class="header-title">Ficha de Leitura</h1>
    </header>
    <main>
        <button type="button" class="button blue mobile" id="cadastrarCliente">Registrar</button>
        <table id="tableClient" class="records">
            <thead>
                <tr>
                    <th>T??tulo</th>
                    <th>Autor</th>
                    <th>Editora</th>
                    <th>G??nero Liter??rio</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="modal" id="modal">
            <div class="modal-content">
                <header class="modal-header">
                    <h2>Informa????es do Livro</h2>
                    <span class="modal-close" id="modalClose">&#10006;</span>
                </header>
                <form id="form" class="modal-form">
                    <input type="text" id="nome" data-index="new" class="modal-field" placeholder="T??tulo"
                        required>
                    <input type="text" id="autor" class="modal-field" placeholder="Autor" required>
                    <input type="text" id="celular" class="modal-field" placeholder="Editora" required>
                    <input type="text" id="cidade" class="modal-field" placeholder="G??nero Liter??rio" required>
                </form>
                <footer class="modal-footer">
                    <button id="salvar" class="button green">Salvar</button>
                    <button id="cancelar" class="button blue">Cancelar</button>
                </footer>
            </div>
        </div>
    </main>
    <a href="home.php">
        <button class="button blue">Voltar para home</button>
        </a>
    <footer>
        Copyright &copy; Library Work
    </footer>
</body>

</html>