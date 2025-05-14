<?php
include('conexao.php');


$q="CREATE TABLE cadastro (id int AUTO_INCREMENT PRIMARY KEY , nome VARCHAR(255) NOT NULL, sobrenome VARCHAR(255)NOT NULL, email VARCHAR(255) UNIQUE NOT NULL)";

$conn->query($q);
$conn->close();

?>