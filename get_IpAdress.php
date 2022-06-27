<?php

include 'database.php';

if (!empty($_POST)) {
$IP_adress = $_POST['IP_adress'];

$pdo = Database::connect();
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "UPDATE smart_box SET IP_adress = '$IP_adress' WHERE Connected = 1 ";

$q = $pdo->prepare($sql);
$q->execute(array());

Database::disconnect();
echo "Insert Success";
}


?>