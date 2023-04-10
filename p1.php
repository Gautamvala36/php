<!-- Write a Php program to calculate final electricity bill based upon below given criteria. take monthly electricity unit from user as input. 
units           price  per unit 
<100            1
>100 & <200     2 
>200 & <300     3
>300 & <400     4
>400            5 -->

<?php

$unit = 300;

if ($unit < 100) {
    echo "units : " . $unit;
    echo "<br>";
    echo "price  per unit : " . $price = 1;
} elseif ($unit >= 100 && $unit < 200) {
    echo "units : " . $unit;
    echo "<br>";
    echo "price  per unit : " . $price = 2;
} elseif ($unit >= 200 && $unit < 300) {
    echo "units : " . $unit;
    echo "<br>";
    echo "price  per unit : " . $price = 3;
} elseif ($unit >= 300 && $unit < 400) {
    echo "units : " . $unit;
    echo "<br>";
    echo "price  per unit  : " . $price = 4;
} else {
    echo "units : " . $unit;
    echo "<br>";
    echo "price  per unit :" . $price = 5;
}
echo "<br>";
$amount = $unit * $price;
echo "monthly electricity unit : " . $amount;
?>