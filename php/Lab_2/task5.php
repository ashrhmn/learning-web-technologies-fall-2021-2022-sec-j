<?php
    function isOdd($number){
        if($number%2!=0){
            return true;
        }
        else{
            return false;
        }
    }

    for($i=10;$i<=100;++$i){
        echo isOdd($i)?$i.'<br>':'';
    }
?>