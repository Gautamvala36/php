<?php
session_start();
require_once("connection.php");
extract($_POST);
var_dump($_POST);

try {
    $sql = "UPDATE employee set name=?,email=?,age=?,gender=?,doj=? WHERE id=?";
    $statment = $db->prepare($sql);
    $statment -> bindparam(1, $name);
    $statment -> bindparam(2, $email);
    $statment -> bindparam(3, $age);
    $statment -> bindparam(4, $gender);
    $statment -> bindparam(5, $doj);
    $statment -> bindparam(6, $id);
    $statment -> execute();
    $_SESSION['message'] = "Employee Updated Successfully";
    header("location:crud_demo.php");
}   
catch(PDOException $error)
{
    echo $error;
}
?>