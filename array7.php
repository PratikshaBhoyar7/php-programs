<?php
//WAP to Find the union of two arrays.

//Initialize 2 array
$array1=array(1,2,3,4,5);
$array2=array(6,7,8);

//Initialize empty array.
$union=array();

//add element to empty array from array1.
for($i=0;$i<count($array1)-1;$i++){
    $union[]=$array1[$i];
}

//Add elements from the second array to the union
for($i=0;$i<count($array2);$i++){
    $flag=true;

    // Check if the element already exists in the union array
    for($j=0;$j<count($union);$j++){
        if($union[$j]==$array2[$i]){
            $flag=false;
        }
    }


//if element is not found add it to union
if($flag){
    $union[]=$array2[$i];
}
}
sort($union);
 print_r($union)."<br>";

?>