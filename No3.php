<?php 
//3.WAP to find largest of 3 no using nested if statement.

$a=5;
$b=7;
$c=9;

if($a>$b){
    if($a>$c){
        echo "Largest no is $a <br>";
    }else{
        echo "Largest No is $c<br>";
    }
}else{
    if($b>$c){
        echo "Largest value is $b <br>";
    }else{
        echo "Largest value is $c<br>";
    }
}


?>