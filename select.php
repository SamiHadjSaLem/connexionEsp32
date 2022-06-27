<?php

include 'database.php';

$adress='1010';

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE smart_box SET IP_adress = '$adress' WHERE Connected = 1 ";

$q = $pdo->prepare($sql);
$q->execute(array());
Database::disconnect();


