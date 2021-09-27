<?php

    function printStar(){
        for($i=0;$i<3;++$i){
            for($j=0;$j<=$i;++$j){
                echo '*';
            }
            echo '<br>';
        }
    }

    function printNumbers(){
        for($i=0;$i<3;++$i){
            for($j=3;$j>$i;--$j){
                echo 4-$j;
            }
            echo '<br>';
        }
    }

    function printAlpha(){
        $ascii = 65;
        for($i=0;$i<3;++$i){
            for($j=0;$j<=$i;++$j){
                echo chr($ascii++);
            }
            echo '<br>';
        }
    }


    echo '
        <table>
            <tr>
                <td>
                    '.printStar().'
                </td>
                <td>
                    '.printNumbers().'
                </td>
                <td>
                    '.printAlpha().'
                </td>
            </tr>
        </table>
    ';
?>