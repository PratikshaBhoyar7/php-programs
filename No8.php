<?php
//8.Wap to list of no from 1 to 100 which are divisible by 3 and  7.

for($i=1;$i<=100;$i++){
    if($i%3==0 && $i%7==0){
        echo "No divisible 3 and 7 are $i<br>";
    }
}

?>