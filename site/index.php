<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <title>Formulario</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Cadastro !</h2>
        </div>
        <form action="cadastrar.php" method="POST" id="form" class="form">
            <div class="form-control" >
                <label for="username">Nome de usuario</label>
                <input name="nome" type="text" id="username" placeholder="Digite seu nome de usuário" >
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input name="email"  type="email" id="email"placeholder="Digite seu Email">
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>
            <div class="form-control">
                <label for="password">senha</label>
                <input name="senha"  type="password" id="password"placeholder="Digite sua senha" >
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>
            <div class="form-control">
                <label for="password-confirmation">Confiramação de senha</label>
                <input type="password" id="password-confirmation" placeholder="Confirme sua senha">
                <i class="fas fa-exclamation-circle"></i>
                <i class="fas fa-check-circle"></i>
                <small>Mensagem de erro</small>
            </div>
            <button type="submit" value="submit">enviar</button>
        </form>

    </div>
    <script src="https://kit.fontawesome.com/cd525c3df2.js" crossorigin="anonymous"></script>
</body>
</html>