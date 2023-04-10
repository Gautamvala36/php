<?php
    date_default_timezone_set("asia/kolkata");
    // date()
    echo "-----DATE";
    echo "<br><br>";
    echo "01 to 31 : ".date("d"); 
    echo "<br>";
    echo "mon to sun : ".date("D"); 
    echo "<br>";
    echo "1 to 31 : ".date("j");
    echo "<br>";
    echo "sunday to saturday : " .date("l"); 
    echo "<br>";
    echo "st,nd,rd or th,work well with j : ". date("S"); 
    echo "<br>";
    echo "0 to 365 days : ".date("z");
    echo "<br>";
    echo "42week in the year : " .date("W");
    echo "<br>";
    echo "<br>";


    // month
    echo "-----Month ";
    echo "<br><br>";
    echo "january to december : ".date("F");
    echo "<br>";
    echo "01 to 12 : ".date("m");
    echo "<br>";
    echo "jan to dec : ".date("M");
    echo "<br>";
    echo "1 to 12 : ".date("n");
    echo "<br>";
    echo "28 to 31 month days : ".date("t");
    echo "<br>";
    echo "<br>";

    // year
    echo "-----Year";
    echo "<br><br>";
    echo "leap year 1 and not leap year 0 : ".date("L");
    echo "<br>";
    echo "year in 4 digits : ".date("Y");
    echo "<br>";
    echo "year in last 2 digit : ".date("y");
    echo "<br><br>";

    // time 
    echo "-----Time";
    echo "<br><br>";
    echo "am or pm : ".date("a");
    echo "<br>";
    echo "AM or PM : ".date("A");
    echo "<br>";
    echo "12-hour 1 to 12 : ".date("g");
    echo "<br>";
    echo "24-hour 0 to 23 : ".date("G");
    echo "<br>";
    echo "12-hour 01 to 12 : ".date("h");
    echo "<br>";
    echo "24-hour 00 to 23 : ".date("H");
    echo "<br>";
    echo "00 to 59 minutes : ".date("i");
    echo "<br>";
    echo "00 to 59 seconds : ".date("s");
    echo "<br><br>";
    
    // timezone

    echo "".date("e");
    echo "<br>";
    echo "".date("I");
    echo "<br>";
    echo "".date("T");
    echo "<br>";
    echo "".date("Z");
    echo "<br><br>";

    // time
    echo time();
    echo "<br><br>";

    // strtotime
    echo "timestamp the number of seconds since january 1 1970 00:00:00 GMT";
    echo "<br><br>";
    echo "new time : ".(strtotime("now"));
    echo "<br>";
    echo "3 march 2023 : " .(strtotime("3 march 2023"));
    echo "<br>";
    echo "+5 hours : ".(strtotime("+5 hours"));
    echo "<br>";
    echo "+1 week : ".(strtotime("+1 week"));
    echo "<br>";
    echo "next monday : ".(strtotime("next monday"));
    echo "<br>";
    echo "last sunday : ".(strtotime("last sunday"));
    echo "<br><br>";

    // mktime()
    echo "timestamp the number of seconds between the unix epoch (january 1 1970 00:00:00 GMT) and the time and specified";
    echo "<br><br>";
    echo (date("d-M-Y",mktime(0,0,0,04,03,2023)));

    echo "<br>";
    echo "current timestamp is ".time();
    echo "<br>";
    echo strtotime("last month");
    echo "<br>";
    echo mktime(5,37,60,2,10,2004);

    echo "<br>";
    echo "date from time stamp ";
    echo "<br>";
    echo date("d/m/Y",time());

?>