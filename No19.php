<?php
//19.Write a program to calculate product of digits of a number. 

$n=2314;
$temp=$n;
$mul=1;
while($n!=0){
    $rem=floor($n%10);
    $mul=$mul*$rem;
    $n=floor($n/10);

}
echo " product of digits of a number $temp is $mul";

?>