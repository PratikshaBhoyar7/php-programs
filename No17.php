<?php
//17.Write a program to find all factors of a number. 

$n=16;

echo "all factors of a number $n are : <br>";
for($i=1;$i<=$n;$i++){
    if($n%$i==0){
        echo "$i <br>";
    }
}

?>