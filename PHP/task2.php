<?php

function Totalvat($amount, $vat) 
{
    $price_with_vat = $amount + ($vat*($amount/100));
    echo "Amount : ".$price_with_vat;
}
Totalvat(2000,15);

?>