<?php
session_start();
require_once("connection.php");

try {
    $sql = "DELETE FROM employee WHERE id = ?";
    $statment = $db->prepare($sql);
    $statment ->bindparam(1,$_REQUEST['id']);
    $statment -> execute();
    $_SESSION['message'] = "Delete Successfully";
    header("location:crud_demo.php");
}   
catch(PDOException $error)
{
    echo $error;
}
?>