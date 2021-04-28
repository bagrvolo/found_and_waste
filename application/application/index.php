<?php

$host = 'localhost';
$db   = 'application';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);
$stmt = $pdo->prepare('SELECT * FROM lostedinfo');
$res = $stmt->execute();
$stmtt = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index_page</title>
</head>

<body>
    <h1>Found & Waste</h1>
    <a href="found.php" style="padding-right: 50px;">Я загубив</a>
    <a href="#" style="padding-right: 50px;">Усі втрати</a>
    <a href="#" style="padding-right: 50px;">Info</a>
    <a href="#" style="padding-right: 50px;">Map</a>
    <a href="#" style="padding-right: 50px;">Мій профіль</a>
    <div class="things" style="display: flex; margin-top: 20px;">
        <div class="founded" style="padding-right: 50px;">
            <h2>Загублене</h2>
            <tbody>
                <?php foreach ($stmtt as $el) : ?>
                    <tr>
                        <td> Місто:  <?= $el['city'] ?> </td> <br>
                        <td> Ім'я:  <?= $el['name'] ?> </td> <br>
                        <td> Що загубили:  <?= $el['losted'] ?> </td>
                        <td>
                            <a href="show.php?id=<?= $el['id']; ?>">Show</a>
                            <a href="delete.php?id=<?= $el['id']; ?>">Delete</a> <br> <br>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>


        </div>
    </div>
</body>

</html>