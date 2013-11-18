<?php

$sum1=0;
for ($i=1; $i<101; $i++) {
	$sum1+=($i*$i);
}
echo $sum1;

$sum2=0;
for ($j=0; $j<101; $j++) {
	$sum2+=($j);
}
echo "<br>";
$diff=($sum2*$sum2) - $sum1;
echo $diff;
?>