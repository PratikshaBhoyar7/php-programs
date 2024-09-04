<?php
//9.WAP to check whether given no prime or not.
$n=13;
$temp=0;

for($i=2;$i<$n-1;$i++){
    if($n%$i==0){
        $temp++;
    }
}
if($temp==0){
    echo "No is prime $n";
}else{
    echo "No is not Prime $n";
}

?>