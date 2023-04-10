<?php
require_once 'Faker-master/src/autoload.php';

$faker = Faker\Factory::create();

// generate data by accessing properties
echo $faker->name;
echo "<br>";
echo $faker->address;
echo "<br>";
echo $faker->phoneNumber;
echo "<br>";

?>