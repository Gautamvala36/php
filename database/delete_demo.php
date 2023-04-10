<?php
require_once("connection.php");
echo "connection established...";
$id = 8;
try {

    $sql = "DELETE from student where id = ?";
    $statement = $db -> prepare($sql);
    $statement ->bindparam(1,$id);
    $statement -> execute();
    echo "<br>Data Delete successfully ";
} 

catch (PDOException $error) {
    echo $error;
}

?>