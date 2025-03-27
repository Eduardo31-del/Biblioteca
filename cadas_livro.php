<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Biblioteca";


// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obter os dados do formulário
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$data_pub = $_POST['data_pub'];
$data_cheg = $_POST['data_cheg'];
$genero = $_POST['genero'];
$sinopse = $_POST['sinopse'];


// Inserir dados no banco
$sql = "INSERT INTO livro (titulo,autor,data_pub,data_cheg,genero,sinopse)
VALUES ('$titulo', '$autor', '$data_pub', '$data_cheg', '$genero', '$sinopse')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro salvo com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>