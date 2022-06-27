<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $nomeBancoDeDados = "form_cadastro";

    $conexao = mysqli_connect($id, $nome, $email, $senha);

    if(!$conexao){
        echo "Não conectou ao bando de dados";
    }else{
        //echo "Conectado";
    }
?>