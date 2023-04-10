<?php
//numeric array  
    // 1 method
    $name = array("gautam","jay","jeet",20);

    print_r($name);
    echo "<br><br>";
    var_dump($name);
    echo "<br><br>";

    // 2 method
    $car[0] = "BMW";
    $car[3] = "GTR";
    $car[11] = "MINI";

    var_dump($car);
    echo "<br><br>";

//example of associative array 
    $person = array("name" => "Gautam", "sarname"=> "vala", "age" => 21);
    var_dump($person);
    echo "<br>";    
    echo $person['name']."--";
    echo $name[1];
    echo "<br><br>";
    
    // forech loop
    foreach($person as $value)
    {
        echo $value."<br>";
    }

    echo "<br><br>";

    foreach ($person as $key => $value) 
    {
        echo "this is key ".$key." this is value ".$value."<br>";    
    }

// multidimensional array
    $BMW = 'bmw';
    $car = array($BMW => array("BMW s-1","color","Red"),
    'MINI' => array("MINI cooper","color","blue"));

    var_dump($car);
    echo "<br><br>";
    print_r($car);
    echo "<br><br>";

?>