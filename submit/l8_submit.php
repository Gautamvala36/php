<?php
print_r($_POST);
echo "<br>";
var_dump($_POST);
echo "<br>";
extract($_POST); 
echo "<br>";
echo "column : ".$_POST['column'];
echo "<br>";
echo "row : ".$_POST['row'];
echo "<br>";

$count = 0;
$flash = 0;

if ($color == 0) {
    $bgcolor = "Red";
}
elseif ($color == 1) {
    $bgcolor = "Blue";
}
elseif ($color == 2) {
    $bgcolor = "Green";
}
else{
    $bgcolor = "black";
}

if ($text_color == 0) {
    $textcolor = "White";
}
else {
    $textcolor ="Black";
}

if($loop == 0)
{
    echo "<table border='2' width='50%' cellpadding='10px' bgcolor=".$bgcolor." style='color:".$textcolor.";'>";
    for($flash=0; $flash < $column; $flash++)
    {
        echo "<tr>";  
        for($count = 0; $count < $row; $count++)   
        { 
            echo "<td>". $text ."</td>";
        }
        echo "</tr>";  
    }
    echo "</table>";
}

elseif($loop == 1)
{
    echo "<table border='2' width='50%' cellpadding='10px' bgcolor=".$bgcolor." style='color:".$textcolor.";'>";
    $flash = 0;
    while ($flash < $column) {
        echo "<tr>";
        $count = 0; 
        while ($count < $row) {
            echo "<td>". $text ."</td>";
            $count++;
        }
        echo "</tr>";
        $flash++;
    }
    echo "</table>";    
}

else
{
    echo "<table border='2' width='50%' cellpadding='10px' bgcolor=".$bgcolor." style='color:".$textcolor.";'>";
    $flash=0;
    do {
        echo "<tr>";
        $count = 0;
        do {
            echo "<td>". $text ."</td>";
            $count++;
        } while ($count < $row);
        echo "</tr>";
        $flash++;
    } while ($flash < $column);
    echo "</table>";
}
?>