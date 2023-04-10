<?php

$name = "gauTam JAY jEEt dEv";

    // strtolower()
    echo strtolower($name);

    // strtoupper()
    echo "<br><br>";
    echo strtoupper($name);

    // ucwords()
    echo "<br><br>";
    echo ucwords($name);

    // wordwrap()
    echo "<br><br>";
    echo wordwrap($name,8,"<br>");
    
    // substr()
    echo "<br>";
    echo "<br>";
    echo substr($name,1);
    echo "<br>";
    echo substr($name,1,7);
    echo "<br>";
    echo substr($name,0,8);
    echo "<br>";
    echo strstr($name,'t');
    echo "<br>";
    echo substr($name,6,6);
    echo "<br>";
    echo substr($name,-6,6);

?>