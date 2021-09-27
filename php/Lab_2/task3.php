<?php

    function isOddOrEven($number){
        if($number%2==0){
            return 'Even';
        }
        else{
            return 'Odd';
        }
    }

    echo '7 is '.isOddOrEven(7).'<br>';
    echo '4 is '.isOddOrEven(4).'<br>';
    echo '0 is '.isOddOrEven(0).'<br>';
?>