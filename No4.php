<?php
//4.WAP to find largest of 3 no using ternery operator
$a=5;
$b=7;
$c=9;

$res=($a>$b)?(($a>$c)?$a:$c):(($b>$c)?$b:$c);

echo "Largest of Three No is $res";

?>