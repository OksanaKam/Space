<?php

require 'components/DBConnect.php';

$pdo = DBconnect::getConnection();

var_dump($pdo);

$user_email = $_POST['user_email'];

$query = "INSERT INTO users VALUES(?)";
$result = $pdo->prepare($query);
$result->execute([$user_email]);

json_encode($result);
