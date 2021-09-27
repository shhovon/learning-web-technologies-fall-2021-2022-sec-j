<?php


for ($i = 1;$i < 5;$i++) 
{
    for ($j = 1;$j <= $i;$j++) 
    {
        echo " * ";
    }
    echo '<br>';
}
echo "<br><br>";

for($i = 0;$i <= 5;$i++) 
{  
    for($j = 3- $i;$j >= 1;$j--) 
    {  
    echo $j." ";  
    }  
    echo " <br>";
}

$i="";
$j="";
$char='A';
for($i=1; $i<=3; $i++)
{
        for($j=1; $j<=$i; $j++)
        {
            echo "$char"." ";
            $char++;
        }
        echo "<br>";
}

?>