<?php
// write a program to find out month.

$month = 6;

if($month <= 12 && $month >= 1)
{
    if($month == 1 || $month == 3 || $month == 5 || $month == 7 || $month == 8 || $month == 10 || $month == 12 )
    {
        echo "month is 31 days";
    }
    elseif ($month == 2)
    {
        echo "month is 28/29 days";
    }
    else
    {
        echo "month is 30 days";
    }
}
else {
    echo "Inavalid input";
}
?>