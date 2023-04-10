<?php

    $num1 = rand(10,99);
    $num2 = rand(10,99);
    $num3 = rand(10,99);
    echo "<br/> num1 = $num1, num2=$num2, num3=$num3";

    // absolute()
    echo "<br>";
    $abs1 = abs(-4.2);
    $abs2 = abs(5);
    $abs3 = abs(-5);
    
    echo "abs1 = ".$abs1;
    echo "<br>abs2 = ".$abs2;
    echo "<br>abs3 = ".$abs3;

    echo "<br>-----------------------------------------------------<br>";

    //  ceil, floor, round

    $amount = 123.456789;
    echo "<br/> Original amount $amount";
    echo "<br/> ceil of amount " . ceil($amount);
    echo "<br/> floor of amount " . floor($amount);
    echo "<br/> float round of amount " . round($amount,2); 

    echo "<br>-----------------------------------------------------<br>";

    // PI()
    
    echo pi();
    echo "<br>";
    echo M_PI;

    echo "<br>-----------------------------------------------------<br>";

    // power ()

    echo "<br/> power of 2 ^ 8 = ";
    echo pow(2,8);

    echo "<br>-----------------------------------------------------<br>";

    // rend number
    $numbers = array(rand(10,99),rand(10,99),rand(10,99),rand(10,99),rand(10,99));
    var_dump($numbers);
    print_r($numbers);

    echo "<br>-----------------------------------------------------<br>";

    // mini and max number
    echo "<br/> minimum from array " . min($numbers);
    echo "<br/> maximum from array " . max($numbers);
?>