<?php

$host = 'localhost';
$db   = 'application';
$user = 'root';
$pass = '';
$charset = 'utf8';

$city = $_POST['city'];
$name = $_POST['name'];
$losted = $_POST['losted'];


$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$pdo = new PDO($dsn, $user, $pass);


$data = array('city' => $city, 'name'=> $name, 'losted' => $losted );
$stmt = $pdo->prepare("INSERT INTO lostedinfo (city, name, losted) values (:city, :name, :losted)");
$stmt->execute($data); 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Знайдене</title>
</head>
<body>
    <h1>Знайдене</h1>

    <?php echo htmlspecialchars($_POST['name']); ?>.
    <?php echo $_POST['losted']; ?>
    <?php echo $_POST['city']; ?>
    <a href="index.php">На головну</a>
</body>
</html>