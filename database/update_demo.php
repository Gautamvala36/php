<?php
require_once("connection.php");
echo "connection established...";

try {
    

    $id = 7;
    $name = "ravi";
    $age = 19;
    $course = "C++";
    $date = "2022-06-06";
    $sql = "UPDATE student set name = ?, age = ?, course = ?, date = ? where id = ?";
    $statement = $db -> prepare($sql);
    $statement -> bindparam(1,$name);
    $statement -> bindparam(2,$age);
    $statement -> bindparam(3,$course);
    $statement -> bindparam(4,$date);
    $statement -> bindparam(5,$id);
    $statement -> execute();
    echo "<br>Data update successfully ";
} 

catch (PDOException $error) {
    echo $error;
}

?>