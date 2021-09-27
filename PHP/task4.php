<?php

      $num1=20;
      $num2=35;
      $num3=22;
      
      if($num1>$num2 && $num1>$num3)
      {
        echo $num1." is the largest number"; 
      }
      else
      {
        if($num2>$num1 && $num2>$num3)
        {
          echo $num2." is the largest number";
        }
        else
          echo $num3." is the largest number";
      }
?>