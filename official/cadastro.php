<?php
session_start();
 include("conexao.php");

 $nome = $_POST['nome'];
 $email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conexao->query($sql) === TRUE){
    echo('Cadastrado com sucesso');
}