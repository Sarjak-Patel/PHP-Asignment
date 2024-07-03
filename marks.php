<?php
// Write a PHP program to enter marks of five subjects Physics, Chemistry,
// Biology, Mathematics and Computer, calculate percentage and grade by if
// else.
    $maths=readline("Eneter the mathematics marks:");
    $physic=readline("Enter the physics marks:");
    $chem=readline("Enter the chemistry marks:");
    $com=readline("Enter the comouter marks:");
    $bio=readline("Enter the biology marks:");

    $total=$maths+$physic+$chem+$com+$bio;
    echo "Total of five subject is:".$total.PHP_EOL;
    $per=$total*100/500;
    echo "Percentage is:".$per.PHP_EOL;

    if($per<="99.00")
    {
        echo "your grade is A+";
    }
    elseif($per<="80.00")
    {
        echo "your grade is A";
    }
    elseif($per<="70.00")
    {
        echo "yor grade is B";
    }
    elseif($per<="60.00")
    {
        echo "your grade is B+";
    }
    elseif($per<="50.00")
    {
        echo "your grade is c";
    }
    else
    {
        echo "your failed";
    }
?>