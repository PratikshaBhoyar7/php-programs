<?php
//1.WAP to swap two no using 3 different method.

$a=5;
$b=6;

echo "Number before swapping $a  &   $b <br>";
  
$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "Number after sswapping $a  &   $b <br>";

//Another method

echo "Number before swapping $a  &   $b <br>";
$temp=$a;
$a=$b;
$b=$temp;
echo "Number after swapping $a  &   $b <br>";

// By using multiplication & division.

echo "Number before swapping $a  &   $b <br>";
$a=$a*$b;
$b=$a/$b;
$a=$a/$b;

echo "Number after swapping $a  &   $b <br>";
?>