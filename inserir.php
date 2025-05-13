<?php
include('conexao.php');

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$email=$_POST['email'];


$sql="INSERT INTO cadastro (`nome`, `sobrenome`, `email`)VALUES (?,?,?)";
$stmt->$conn->prepare($sql);
$stmt->bind_param("sss", $nome, $sobrenome, $email);
if($stmt->execute()){
    header("Location:index.php");
    exit();
}else{
    echo"Erro ao inserir:".$conn->error;
}


?>