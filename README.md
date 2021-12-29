# Formulario
 Formulário teste para cadastro de pessoas

 Este formulário foi criado do zero

 Abaixo segue a descrição detalhada de como ele foi feito afim de ajudar outros estudantes.

 O passo a passo foi definido e criado por mim

1º GUITHUB DESKTOP 
a) crie o repositório (Formulário)
b) publique o repositório 

2º VISUAL STUDIO CODE
OBS: no próprio guithub desktop terá do lado direito um botão que levará para o Visual Studio Code chamado (Open in Visual Studio Code)
A PARTIR DAQUI USE SEMPRE O VISUAL STUDIO CODE para tudo...
Defina a pasta formulário no seu diretório onde consta o "wampserver instalado" no meu caso o caminho foi este "C:\wamp64\www\Formulario) 
a) crie as pastas: css, img, js, php
b) crie o arquivo index.html 
c) edite estes arquivos para a criação do formulário

obs: os dados dos formários serão: nome, idade, sexo, peso, altura, e nacionalidade

as informações para a edição destes arquivos não serão informados aqui este será o seu desafio

Dica:   Na pasta css deverão constar os arquivos *.css
        Na pasta js deverão constas os arquivos *.js
        Na pasta php deverão constar os arquivos *.php (opcional)
        Na pasta img deverão constar os arquivos *.jpg *.png ou qualquer outro tipo que desejar


3º CRIE O FORMULARIO (a linguagem aqui utilizada será o HTML, CSS, W3.CSS E JavaScript)

4º CRIE O BANCO DE DADOS (MySQL Workbench) Criado a conexão com o local host

create database cadastro;


CREATE TABLE pessoas (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
nome varchar(30) NOT NULL,
idade varchar(30) NOT NULL,
sexo varchar(8),
peso float,
altura float,
nacionalidade varchar (50),
mensagem varchar (255),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);



Será nescessário apenas dois arquivos:
1 para criar a conexão com o banco de dados (conciderando que o banco e as tabelas já foram criados)


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


2 para capturar as informações inserida no formulário, lembrando que neste arquivo será incluso o arquivo que faz a conexão com o banco 

<?php

include_once ('conexao.php');

// Receive the data  
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$sexo = $_POST['sexo'];
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$nacionalidade = $_POST['nacionalidade'];
$mensagem = $_POST['mensagem'];


$sql = "INSERT INTO pessoas (nome, idade, sexo, peso, altura, nacionalidade, mensagem) 
VALUES ('$nome','$idade','$sexo','$peso','$altura','$nacionalidade','$mensagem')";


if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado com sucesso!";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>


Obs: Veja os arquivos conexao.php e salva-mensagem.php







