<?php
//Wap to Reversing the order of elements in an array.

$num=array(1,2,3,4,5);

$revarray=array();

for($i=count($num)-1; $i>=0;$i--){
    $revarray[]=$num[$i];

}

echo "Reversed elements in array are <br>";
 foreach($revarray as $n){
    echo $n. "<br>";
 }

?>