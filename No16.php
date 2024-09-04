<?php
//Write a program to find the number and sum of all integers between 100 and 200 which are divisible by 9. 

$sum=0;
echo "integers between 100 and 200 which are divisible by 9 are<br>";
for($i=100;$i<=200;$i++){
    if($i%9==0){
        echo "$i<br>";
      $sum=$sum+$i;
    }
}
echo "sum of all integers between 100 and 200 which are divisible by 9 are $sum";

 ?>