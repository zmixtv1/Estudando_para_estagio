<?php
define('HOST', 'localhost');
define('USUARIO', 'root');
define('SENHA', 'teste'); 
define('DB', 'login_estagio');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

?>