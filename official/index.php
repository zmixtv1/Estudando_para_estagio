<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Cadastro</h1>
        </div>
        <form action="cadastro.php" method="post" class="form">
            <div class="form-control">
                <label for="username">Nome de usário</label>
                <input type="text" name="nome" id="nome">
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="form-control">
                <label for="Password">senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>