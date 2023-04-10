<?php
session_start();
require_once("connection.php");

var_dump($_POST);
extract($_POST);

try {
    $sql = "insert into shop (name,address,status,city,conumber,opd) values (?,?,?,?,?,?)";
    $statement = $db->prepare($sql);
    $statement->bindparam(1, $name);
    $statement->bindparam(2, $address);
    $statement->bindparam(3, $status);
    $statement->bindparam(4, $city);
    $statement->bindparam(5, $conumber);
    $statement->bindparam(6, $opd);
    $statement->execute();
    $_SESSION['message'] = "Shop Added Successfully";
    header("location:home.php");
} 
catch (PDOException $error) {
    echo $error;
}

?>