<?php
//10.WAP to check whether given no is palindrome or not.

$n=121;
$rem=0;
$palindrome=$n;
echo "Original No $n<br>";
while($n!=0){
    $rem=$rem*10;
    $rem=$rem+$n%10;
    $n=floor($n/10);
}
if($palindrome==$rem){
    echo "Palindrome";
}else{
    echo "Not Palindrome";
}
?>