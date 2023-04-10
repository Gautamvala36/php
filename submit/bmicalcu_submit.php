<?php
// echo "this is submit bmi page";
// bmi = weight / meter * meter

var_dump($_POST);
echo "<br>";
extract($_POST); 
echo "<br>";

$foot_inch = 12 * $height_foot;
echo "this is foot to inch : ".$foot_inch;
$total_inch = $foot_inch * $height_foot;
echo "<br>this is total inch : ".$total_inch;
$meter = $total_inch / 39.37;
echo "<br>this is meter ".$meter;
$bmi = $weight / ($meter * $meter);
echo "<br>this is bmi ".$bmi;
header("location:../bmicalcu.php?bmi=$bmi");

// echo "this is submit bmi page";
// bmi = weight / meter * meter
// foot to centimeter     5=152.4
// centimeter to meter    152.4=1.524
// meter = ans*ans        1.524*1.524


// var_dump($_POST);
// echo "<br>";
// extract($_POST); 
// echo "<br>";

// $centimeter = $height_foot * 30.48;   // foot to centimeter 
// echo "this is foot to centimeter : ".$centimeter; 
// $meter = $centimeter / 100; // centimeter to meter 
// echo "<br>this is total  : ".$meter;
// $height = $meter * $meter; // meter * meter
// echo "<br>this is Height : ".$height;
// $bmi = $weight / $height;
// echo "<br>thlocationis is bmi ".$bmi;
?> 