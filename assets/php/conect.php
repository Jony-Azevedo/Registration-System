<?php
// conecta ao banco
$pdo = new PDO("mysql:host=localhost;dbname=cadastro","root","");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>