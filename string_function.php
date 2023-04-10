<?php
    $f = fopen("temp.txt",'w');
    $day = 03;
    $month = 06;
    $year = 2002;
    printf($f,"%02d-%02d-%04d",$day,$month,$year);
    echo "<br>";
    echo "content written succesfully";
    $str = "      hello world ";
    $str = ltrim($str);
    $name = "Gautam Vala";
    
    //  str_pad()
    echo "<br>";
    echo "<pre>";
    echo $str;
    echo "this is name $name";
    echo "</pre>";
    echo "<br>";
    echo str_pad($name,20,"-",STR_PAD_BOTH);
    echo "<br>";
    echo str_pad($name,20,"-",STR_PAD_LEFT);
    echo "<br>";
    echo str_pad($name,20,"-",STR_PAD_RIGHT);

    // str_repeat
    echo "<br><br>";
    echo str_repeat("*",20);

    // str_replace()
    echo "<br><br>";
    echo str_replace("a","*",$name,$count);
    echo "<br>";
    echo "count of replace of charecter : ".$count;

    // str_split()
    echo "<br><br>";
    var_dump(str_split($name,2));

    // strcmp()
    echo "<br><br>";    
    $string1 = "aba"; //01100001 
    $string2= "aaf"; //01000001 01000001 01000001  
    echo strcmp($string1,$string2);
    if(strcmp($string1,$string2) == 0)
    {
        echo "<br> both string are same ";
    }
    if(strcmp($string1,$string2) < 0)
    {
        echo "<br>  string 1 is smaller ";
    }
    if(strcmp($string1,$string2) > 0 )
    {
        echo "<br>  string 1 is greater ";
    }

    // strpos()
    echo "<br><br>";
    echo "this is name(Gautam Vala) position charecter : " .strpos($name,"a");

    // strlem()
    echo "<br><br>";
    echo "this is name(Gautam Vala) langth charecter : " .strlen($name);
?>