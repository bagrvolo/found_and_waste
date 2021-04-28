<?php

$id = $_GET['id'];

$host = 'localhost';
$db   = 'application';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "DELETE FROM lostedinfo WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id" , $id);

$stmt->execute();

header('Location: /');

?>