<?php

$servidor = 'mysql367.umbler.com';
$port = '41890';
$usuario = 'rally';
$senha = '8X/}Qk5hjc';
$banco = 'hackaton';
// Conecta-se ao banco de dados MySQL
$mysqli = new mysqli($servidor, $usuario, $senha, $banco);
// Caso algo tenha dado errado, exibe uma mensagem de erro
if (mysqli_connect_errno())trigger_error(mysqli_connect_error());