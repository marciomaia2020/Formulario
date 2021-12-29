<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "cadastro";


// Create connection
$conn = new mysqli($servidor, $usuario, $senha, $dbname);


// Check connection
if ($conn->connect_error) {
  die("A conexão falhou: " . $conn->connect_error);
}


?>