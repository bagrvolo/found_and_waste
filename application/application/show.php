<?php

$id = $_GET['id'];



$host = 'localhost';
$db   = 'application';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);

$sql = "SELECT * FROM lostedinfo WHERE id = :id";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":id", $id);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <thead>
    <tbody>
                    <tr>
                        <td> Місто:  <?= $res['city'] ?> </td> <br>
                        <td> Ім'я:  <?= $res['name'] ?> </td> <br>
                        <td> Що загубили:  <?= $res['losted'] ?> </td> <br> <br>
                        <td> <a href="index.php">На головну</a> </td>
                    </tr>
            </tbody>
    </thead>
</body>

</html>