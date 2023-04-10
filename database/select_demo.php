<?php
require_once("connection.php");
echo "connection established...";

$sql = "SELECT * from student";
$statement  = $db -> prepare($sql);
$statement -> setFetchMode(PDO::FETCH_ASSOC);
$statement ->execute();
$table = $statement->fetch();

var_dump($table);
?>