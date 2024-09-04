<?php
//18.Write a program to rotate values of variables X, Y, Z such that X->Y,Y->Z,Z->X.

$x=2;
$y=5;
$z=8;
echo "Numbers before swap $x , $y, $z <br>";
$temp=0;
$temp=$x;
$x=$y;
$y=$z;
$z=$temp;
echo "Numbers after swap $x , $y, $z <br>";

?>