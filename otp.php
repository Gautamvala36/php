<?php

// otp generate



$opt = rand(100000,999999);
echo "this is otp $opt";
echo "<br>";
$opt2 = rand(10,99) . rand(10,99) . rand(10,99);
echo "this is otp $opt2";

?>