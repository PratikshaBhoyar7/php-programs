<?php
//14. WAP to print fibonacii  series.
$pno=0;
$cno=1;
 echo "$pno<br>$cno<br>";

for($i=1;$i<=8;$i++){
    $fibo=$cno+$pno;
    echo "$fibo <br>";
    $pno=$cno;
    $cno=$fibo;
}

?>