<?php
session_start();
require_once("connection.php");
extract($_POST);
var_dump($_POST);

try {
    $sql = "UPDATE shop set name=?,address=?,status=?,city=?,conumber=?,opd=? WHERE id=?";
    $statement = $db->prepare($sql);
    $statement->bindparam(1, $name);
    $statement->bindparam(2, $address);
    $statement->bindparam(3, $status);
    $statement->bindparam(4, $city);
    $statement->bindparam(5, $conumber);
    $statement->bindparam(6, $opd);
    $statement->bindparam(7, $id);
    $statement->execute();
    $_SESSION['message'] = "Shop Data Updated Successfully";
    header("location:home.php");

} catch (PDOException $error) {
    echo $error;
}
?>