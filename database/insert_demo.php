<?php
require_once("connection.php");
echo "connection established...";

try {

    $name = "hardik";
    $age = 19;
    $course = "php";
    $date = "2022-12-31";
    $sql = "INSERT into student (name,age,course,date) Values (?,?,?,?)";
    $statement = $db->prepare($sql);
    $statement->bindparam(1, $name);
    $statement->bindparam(2, $age);
    $statement->bindparam(3, $course);
    $statement->bindparam(5, $date);
    $statement->execute();
    echo "Data added successfully ";
} 

catch (PDOException $error) {
    echo $error;
}

?>