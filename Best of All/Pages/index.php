
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Libray Work</title>
    <link rel="stylesheet" href="/Best of All/Style/bootstrap.min.css">
    <link rel="stylesheet" href="/Best of All/Style/cadastrar.css">
</head>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
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

hr {
  border: 0px;
  border-top: 1px solid lightgray;
}

.modal-container {
  width: 100vw;
  position: fixed;
  top: 30px;
  display: none;
  z-index: 999;
  justify-content: center;
}

.modal {
  display: flex;
  flex-direction: column;
  padding: 30px;
  border-radius: 10px;
  width: 100%;
}

.active {
  display: flex;
}

.active .modal {
  animation: modal .4s;
}

@keyframes modal {
  from {
    opacity: 0;
    transform: translate3d(0, -60px, 0);
  }
  to {
    opacity: 1;
    transform: translate3d(0, 0, 0);
  }
}

span {
  margin: 10px auto;
}

.btns {
  display: flex;
  justify-content: space-between;
  margin-top: 10px;
}

.btns button {
  font-size: medium;
  padding: 10px;
  border: none;
  border-radius: 5px;
  color: black;
  cursor: pointer;
}

.btnOK {

}

.btnClose {
  
 }

 @media (max-width: 500px) {
  .modal {
    padding: 10px;
    width: 80%;
  }   

  span, .btns button {
    font-size: smaller;
  }
 }
</style>
<body>

  <div class="modal-container">
    <div class="modal">
      <div id="main-container">
    <h1>Entrar no site</h1>
    <form id="register-form" action="">
      <div class="full-box">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" placeholder="Digite seu e-mail" data-min-length="2" data-email-validate>
      </div>
      <div class="half-box spacing">
          <label for="name">Nome</label>
          <input type="text" name="name" id="name" placeholder="Digite seu nome" data-required data-min-length="3" data-max-length="16">
      </div>
      <div class="half-box">
          <label for="lastname">Sobrenome</label>
          <input type="text" name="lastname" id="lastname" placeholder="Digite seu sobrenome" data-required data-only-letters>
      </div>
      <div class="half-box spacing">
        <label for="lastname">Senha</label>
        <input type="password" name="password" id="password" placeholder="Digite sua senha" data-password-validate data-required>
      </div>
      <div class="half-box">
        <label for="passconfirmation">Confirmação de senha</label>
        <input type="password" name="passconfirmation" id="passwordconfirmation" placeholder="Digite novamente sua senha" data-equal="password">
      </div>
      <div class="full-box">
        <input id="btn-submit" type="submit" value="Registrar" >
      </div>
      <div class="btns">
        <button class="btnClose" onclick="closeModal()">Close</button>
      </div>
    </form>
  </div>
  <p class="error-validation template"></p>
    <script src="/Best of All/Script/cadastrar.js"></script>
    </div>
  </div>

    <section class="banner">
        <div class="texto">
           <h1 class="titulo">Alugue seu livro</h1>
           <h2 class="sub_titulo">Library Work</h2>
           <div class="botoes">
               <button class="n-overlay" onclick="openModal()">Entrar</button>
               <a href="home.php">
               <button class="overlay">Alugar Livro</button>
               </a>
           </div>
        </div>
    </section>
    <script>
      const modal = document.querySelector('.modal-container')

function openModal() {
  modal.classList.add('active')
}

function closeModal() {
  modal.classList.remove('active')
}
    </script>
    <script src="/Best of All/Script/cadastrar.js"></script>
</body>
</html>