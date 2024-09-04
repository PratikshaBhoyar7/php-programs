<?php
//5.WAp to count no of digits in a number.

$n=120956;
$count=0;
While($n!=0){
   $n=floor($n/10);
   $count++;
}
echo "No of digits are $count";

?>