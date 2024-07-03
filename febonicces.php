<?php
    // Write a program in PHP to print Fibonacci series. 0, 1, 1, 2, 3, 5, 8, 13, 21, 34.
    $n=0;
    $n1=0;
    $n2=1;
    $n=$n1+$n2;
    while($n<12)
    {
        $n3=$n1+$n2;
        echo $n3.' ';
        $n1=$n2;
        $n2=$n3;
        $n =$n+1;
    }
?>