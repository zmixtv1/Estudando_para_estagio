<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>cadastro</h1>
        </div>
        <form action="cadastro.php" method="post">
            <div class="form-group">
                <label for="">Nome: </label>
                <input type="text" name="nome" placeholder="Nome completo" id="nome">
            </div>
            <div class="form-group">
                <label for="">Email: </label>
                <input type="email" name="email" placeholder="*******@email.com" id="email">
            </div>
            <div class="form-group">
                <label for="">Senha: </label>
                <input type="password" name="senha" id="ssenha" placeholder="*********">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>