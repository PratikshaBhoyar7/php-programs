<?php
//20.Write a program to generate 10 random numbers within the range 1 to 100 
//and test them whether they are prime numbers or not.

//Arrey to store random no.
$randomNo=[];

//generate 10 random using rand() method and store it to array.
for($i=1;$i<=10;$i++){
    $randomNo[]=rand(1,100);
}

//print random no.
print_r($randomNo);
echo "<br>";

//check whether they are prime or not.
foreach($randomNo as $num){
    if($num<2){
        echo "No is not prime no $num<br>";
        continue;
    }
    $flag=1;
    for($i=2;$i<$num;$i++){
        if($num%$i==0){
            echo "No is not prime $num<br>";
            $flag=0;
            break;
        }
    }
    if($flag){
        echo "Number is prime no $num<br>";
    }else{
        echo "Number is not a prime no $num<br>";
    }
}

?>