<?php
//6.Wap to find sum of all digits in a number.

$n=1212;
$rem=0;
$sum=0;
while($n!=0){
    $rem=$n%10;
    $sum=$sum+$rem;
    $n=floor($n/10);

}
echo "Sum of digit of number is $sum";

?>