<?php
include('conexao.php');
include('index.php');

$id = $_GET ['id'];
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];

$sql="UPDATE registro SET nome=?, sobrenome=?, email=? WHERE id=?";

$stmt=$conn->prepare($sql);
$stmt->bind_param("sssi", $nome, $sobrenome, $email, $id);

if($stmt->execute()){
    header("Location: index.php");
    exit();
}else{
    echo "Erro ao inserir: " . $conn->error;
}

?>