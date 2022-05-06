<?php 
include('conexao.php');

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sqlUsuario = " SELECT * FROM usuarios WHERE email = '$email'";


$result = $conexao->query($sqlUsuario);

if(mysqli_num_rows($result) < 1){
    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    if ($conexao->query($sql) === TRUE){
        echo('Cadastrado com sucesso');
    }

}else{
    echo '<p>Usuário já cadastrado</p>';    
    exit();
}

?>