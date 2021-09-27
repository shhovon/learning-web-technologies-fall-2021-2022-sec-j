<?php

$arr = [44, 16, 41, 6, 14, 7, 23, 3];

function search_array($arr, $element) 
{
    for($i = 0; $i < sizeof($arr); $i++) 
    {
        if($arr[$i] == $element)
        {
            echo "the element ".$element." is in ".$i."th position";
        }
    }
    return -1;
}

search_array($arr, 23);

?>