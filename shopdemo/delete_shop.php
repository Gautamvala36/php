<?php
session_start();
require_once("connection.php");

try {
    $sql = "DELETE FROM shop WHERE id = ?";
    $statement = $db->prepare($sql);
    $statement -> bindparam(1,$_REQUEST['id']);
    $statement ->execute();
    $_SESSION['message'] = "Shop Data Delete Successfully";
    header("location:home.php");
}
 catch (PDOException $error) {
   echo $error;
}
?>