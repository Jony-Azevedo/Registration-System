<?php
include 'conect.php';

$sql = "SELECT * FROM clientes";
$conbd = $pdo->prepare($sql);
$conbd->execute(); 
$clientes = $conbd->fetchAll(PDO::FETCH_ASSOC);

?>