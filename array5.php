<?php 
//WAP to find the duplicate elements in an array
 $num=array(2,4,5,7,2,3,5,9,4);
 $duplicateArray=array();

 for($i=0;$i<count($num)-1;$i++){
    for($j=$i+1;$j<count($num);$j++){
        if($num[$i]==$num[$j]){
        $duplicateArray[]=$num[$i];

        }

    }
 }
 echo "Duplicate elements are <br>";
 foreach($duplicateArray as $n){
 echo "$n <br>";
 }
?>