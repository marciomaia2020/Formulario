<?php

include_once ('conexao.php');

// Receive the data  
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$nacionalidade = $_POST['nacionalidade'];


$sql = "INSERT INTO pessoas (nome, idade, sexo, peso, altura, nacionalidade) 
VALUES ('$nome','$idade','$sexo','$peso','$altura','$nacionalidade')";

/*
if ($conn->query($sql) === TRUE) {
    echo "Novo registro criado com sucesso!";
  } else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

*/

?>