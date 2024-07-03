<?php
    // Write a PHP program to check Leap years between 1901 to 2016 Using nested if.
    $year=readline("Enter the year:");
    echo "The year is $year".PHP_EOL;
    if($year%400==0)
    {
        echo "this is leep year";
    }
    elseif($year%100==0)
    {
        echo "this year is not leep year";
    }
    elseif($year%4==0)
    {
        echo "this year is leep year";
    }
    else
    {
        echo "This is not leep year";
    }
?>