<?php
include('cenexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location: index.html');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['usuario'] = $usuario;
    header('location: painel.php');
    exit();
}else {
    header('location: index.html');
    exit();
}

?>