<?php
    function priceAfterVat($price){
        return $price*1.15;
    }

    $price = 100;

    echo $price.'$ is '.priceAfterVat($price).'$ after adding 15% VAT';
?>