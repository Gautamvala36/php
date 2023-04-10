<?php

// array()
echo "array()<br>";
$myarray =  array(10,12,8=>80,4=>40,19,3=>30);
print_r($myarray);
echo "<br><br>";


// sort()
echo "sort()";
$number = array(10,203,20,5,50,60,40,40,855,69,45,101,203.25,'gautam','jay','meet');

var_dump($number);
echo "<br><br>";

sort($number,SORT_REGULAR); 
var_dump($number);
echo "<br><br>";

sort($number,SORT_NUMERIC);
var_dump($number);
echo "<br><br>";

sort($number,SORT_STRING);
var_dump($number);
echo "<br><br>";


// count 
echo "count()<br>";
echo "total count of array number is ";
echo count($number);
echo "<br><br>";


// sizeof()
echo "sizeof()<br>";
echo "size of array number is ";
echo sizeof($number);
echo "<br><br>";


// list()
$car = array("BMW",'MINI','GTR');
var_dump($car);
list($top,$super,$low) = $car;
echo "top = ".$top;                                                             
echo " super = ".$super;
echo " low = ".$low;


// merged array()
$merged_array = array_merge($number,$car);
echo "<br><br>";
var_dump($merged_array);
?>