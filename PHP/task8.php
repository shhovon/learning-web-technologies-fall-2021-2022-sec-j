<?php

$shapes= [
    ['n1'=>1, 'n2'=>2, 'n3'=>3, 'n4'=>"A"],
    ['n1'=>1, 'n2'=>2, 'n3'=>"B", 'n4'=>"C"],
    ['n1'=>1, 'n2'=>"D", 'n3'=>"E", 'n4'=>"F"]
];

echo "<h3>Array: </h3>";
foreach($shapes as $std)
{
    echo $std['n1']." ".$std['n2']." ".$std['n3']." ".$std['n4'];
    echo "<br>";
}

echo "<h3>Shapes:</h3>";

for($i = 0; $i <= 5; $i++) 
{  
    for($j = 3- $i; $j >= 1; $j--) 
    {  
    echo $j." ";  
    }  
    echo "<br>";
}

$i="";
$j="";
$char=$shapes[0]['n4'];
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