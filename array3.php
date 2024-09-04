<?php
//WAP to to find the sum of all elements in an array.
$num=array(1,1,2,1);
$sum=0;

foreach($num as $n){
    $sum=$sum+$n;
}
echo "Sum of all elements in an array are <br> $sum";


?>