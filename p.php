<?php
$count = 0;
$flash = 0;

for ($count = 0; $count < 5; $count++)
{
    for($flash = $count;$flash < 5;$flash++)
    {
        echo "*";
    }
    echo "<br>";
}
?>