<?php
// WAP to Find the frequency of each element in an array.

$array=array(2,3,2,4,5,6,7,8,2,4,6,5,1,2,4);

sort($array);
$currentElement=$array[0];
$count=1;

for($i=1;$i<count($array);$i++){
    if($array[$i]==$currentElement){
       $count++;
    }
    else{
          echo"$currentElement:$count times<br>";

          $currentElement=$array[$i];
          $count=1;
    }
}
echo "$currentElement :$count times <br>";
?>