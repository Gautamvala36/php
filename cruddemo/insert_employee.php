<?php
session_start();
require_once("connection.php");
var_dump($_POST);
extract($_POST);

try {
    $sql = "insert into employee (name,email,age,gender,doj) values(?,?,?,?,?) ";
    $statement = $db->prepare($sql);
    $statement->bindparam(1, $name);
    $statement->bindparam(2, $email);
    $statement->bindparam(3, $age);
    $statement->bindparam(4, $gender);
    $statement->bindparam(5, $doj);
    $statement->execute();
    $_SESSION['message'] = "Employee added successfully";
    header("location:crud_demo.php");
} 
catch (PDOException $error) {
    echo $error;
}

?>