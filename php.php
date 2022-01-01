<?php
require ('pdo.php');

$stmt = 'INSERT INTO `message` (msg) VALUES (:msg)' or die('non');
$message = $_POST["msg"];
$query=$db->prepare($stmt);
$query->bindvalue(':msg', $message);
$query->execute();

$stmt2 = $db->query('SELECT * FROM `message`');
