<?php

function odd_even($num)
{
    if($num % 2 == 0)
    {
        echo $num." is an even number";
    }
    else
    {
        echo $num." is an odd number";
    }
}

$num=21;
odd_even($num);

?>