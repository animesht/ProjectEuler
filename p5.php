<?php

$i=19;
while ($f!==1) {
$num = $i*20;
$i++; 
if ($num%7==0 && $num%11==0 && $num%9==0 && $num%16==0 && $num%13==0 && $num%17==0 && $num%19==0) {
$f = 1;
}
}
echo $num;
?>