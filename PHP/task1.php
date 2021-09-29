<?php

$length=20;
$width=10;


function perimeter($length,$width) {
  echo "Length: ".$length."<br>";
  echo "Width  : ".$width."<br>";
  echo "Perimeter: ".(2*($length + $width))."<br>";
  echo "Area : ".($length*$width);
  return;
}

perimeter(20,10);

?>
