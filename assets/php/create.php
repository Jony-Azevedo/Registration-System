<?php
include 'conect.php';
//recebe dados vindos do Frontend
$nome = $_POST["nome"];
$nascimento = $_POST["nasc"];
$cpf = $_POST["cpf"];
$phone = $_POST["celular"];
$email = $_POST["email"];
$endereco = $_POST["endereco"];
$obs = $_POST["obs"];
//Insere dados
$sql = "INSERT INTO clientes (`nome`, `nascimento`, `cpf`, `celular`, `email`, `endereco`, `observacao`) VALUES ('$nome', '$nascimento', '$cpf', '$phone', '$email', '$endereco', '$obs')";
$exec = $pdo->query($sql);
?>
