<?php
include 'conect.php';

$sql = "SELECT * FROM clientes ORDER BY id ASC LIMIT 10";
$conbd = $pdo->prepare($sql);
$conbd->execute(); 
$clientes = $conbd->fetchAll(PDO::FETCH_ASSOC);

?>