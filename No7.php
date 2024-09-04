<?php
//7.Wap to reverse the no.

$n=12345;
$rem=0;
echo "Original No $n<br>";
while($n!=0){
    $rem=$rem*10;
    $rem=$rem+$n%10;
    $n=floor($n/10);
}
echo "Reverse of a number is $rem";
?>