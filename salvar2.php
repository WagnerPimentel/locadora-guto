<?php

$usuario = $_POST["usuario"];

$arquivo = fopen("clientes.txt","a");
fwrite($arquivo, $usuario . "\n");
fclose($arquivo);

header('Location: cadastrar.php');
