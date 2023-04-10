<?php

echo "<br>this is example of array push<br>";
$name = array("gautam", "jay", "meet");
var_dump($name);
print_r($name);
echo "<br><br>";

array_push($name, "dev");
var_dump($name);
echo "<br>";

echo "this is example of array pop<br>";

$value = array_pop($name);
print_r($name);
var_dump($name);
echo "<br>the value of variable value is $value";
echo "<br><br>";


// array_reverse
var_dump($name);
$reversed_name = array_reverse($name);
echo "This is reversed array without preserve key ";
var_dump($reversed_name);
echo "This is reversed array with preserve key<br>";
$reversed_preserve_name = array_reverse($name, true);
var_dump($reversed_preserve_name);


// sum array
$num = array(10, 20, 30, 40, 50);
echo "sum(num) =" . array_sum($num);


// implode array
var_dump($name);
print_r($name);
$implode_string = implode(" , ", $name);
echo "<br>";
echo $implode_string;

echo "<br>--------------------------------------------------------------<br>";

// Explode array

echo "<br>";
$names = "Hardik Paras Aniket Ruturaj Gautam Jay";
echo $names;
echo "<br>";
$explode_array = explode(" ", $names);
var_dump($explode_array);

// array_change_key_case
$myarray = array("FirSt" => "one", "SECond" => "two", "ThirD" => "three", "firST" => "four");
var_dump(array_change_key_case($myarray, CASE_UPPER));
echo "<br><br>";

// array_key_exists
$search_array = array("first" => "one", "second" => "two", "thrid" => "three");
var_dump($search_array);
if (array_key_exists('second', $search_array)) {
    echo "<br>second key is found";
} else {
    echo "<br> second key is not found";
}
echo "<br><br>";

// array_search
echo "the array search :";
echo array_search("jay", $name);

echo "<br>--------------------------------------------------------------<br>";

// array_unshift 

array_unshift($name, "meet", "dev");
print_r($name);

?>