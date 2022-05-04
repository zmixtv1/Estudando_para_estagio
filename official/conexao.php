<?php

$servername = "localhost";
$username = "root";
$password = "";
$banco = "cadastro";

$conexao = new mysqli($servername, $username, $password, $banco);

if($conexao -> connect_error){
    die("Conexão falhou: ".$conexao->connect_error);
}

?>