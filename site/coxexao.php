<?php

$servername = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro";

$conexao = new mysqli($servername, $usuario, $senha, $banco);

if ($conexao->error){
    die("Conexão falhou" .$conexao->connect_error);
}else{
    echo ("Conectado com sucesso");
}



?>