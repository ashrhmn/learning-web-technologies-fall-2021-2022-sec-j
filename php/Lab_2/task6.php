<?php
    function search($array,$element){
        for($i=0;$i<3;++$i){
            if($array[$i]==$element){
                return true;
            }
        }
        return false;
    }

    $arr = array('ash','nil','oop');

    echo 'ash is '.(search($arr,'ash')?'':'not ').'found in array<br>';
    echo 'oop is '.(search($arr,'oop')?'':'not ').'found in array<br>';
    echo 'oop2 is '.(search($arr,'oop2')?'':'not ').'found in array<br>';

?>