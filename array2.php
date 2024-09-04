<?php
// WAP Program to find and display the number of elements in an array.

$num=array(4,5,6,7,8,9);
$arrayElement=0;
foreach($num as $n){
 $arrayElement++;
}
echo "No of elements in an array are<br> $arrayElement";
?>