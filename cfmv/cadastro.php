<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

if (!isset($nome) && !isset($email) && !isset($senha)){
    die('Cadastro incompleto! COmplete todos os campos');
}else{

    $sqlUsuario = "SELECT * FROM usuarios WHERE email = '$email'";

    $resultado = $conexao->query($sqlUsuario);

    if (mysqli_num_rows($resultado) < 1){

        $sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if($conexao->query($sql) === TRUE){

            echo "usuarios cadastrado com sucesso";

        }else{

            die ("Erro no cadastro");

        }
    }else{
        die('usuario já existe');
    }
}

?>