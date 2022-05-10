<?php

$nameserver = 'localhost';
$username= 'root';
$password= '';
$banco = 'cfmv';

$conexao = new mysqli($nameserver, $username, $password, $banco);

if ($conexao->connect_error){
    die("Erro na conexao ". $conexao->connect_error);
}

?>