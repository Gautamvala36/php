<?php
$length1 = 90;
$length2 = 60;
$length3 = 60;
$width1 = 60;
$width2 = 70;
$width3 = 9;

$office1 = $width1 * $length1;
$office2 = $width2 * $length2;
$office3 = $width3 * $length3;

if ($office1 == $office2 && $office2 == $office3) 
{
    echo "all are same";
} 
else 
{
    if ($office1 > $office2)
    {
        if ($office1 > $office3) 
        {
            echo "office1 in largest";
        }
        else 
        {
            echo "office3 in largest";
        }
    } 
    elseif ($office2 > $office3)
    {
        echo "office2 in largest";
    } 
    else 
    {
        echo "office31 in largest";
    }
}
