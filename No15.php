<?php
//15.Write a program to add first and last digit of a four digit number. 

$n=1232;
$rem=floor($n%10);
$first=floor($n/1000);
$sum=0;
$sum=$first+$rem;
echo "Sum of first and last digit of a 4 digit number is $sum";

?>