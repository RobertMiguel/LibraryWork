<?php
include ("conexao.php");
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $cadastro = mysqli_query($conexao, "INSERT INTO formulario(nome, email, senha) VALUES ('$nome', '$email', '$senha')");

    if($conexao){
        header('location: produtos.php');
    }
?>