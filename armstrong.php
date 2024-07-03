<?php
    $num=readline("Enter the number:");
    $x=$num;
    $total=0;
    while($x!=0)
    {
        $r=$x%10;
        $total=$total+$r*$r*$r;
        $x=$x/10;
    }
    if($num==$total)
    {
        echo "it is a armstrong number";
    }
    else
    {
        echo "no,its not armstrong numbere";
    }
?>