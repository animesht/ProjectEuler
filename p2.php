<?php
$first=1;
$second=2;
$sum=2;
while ($num<4000000) {
	$num = $first + $second;
	$first = $second;
	$second = $num;
	if($num%2==0) {
	$sum+=$num;
	}
}
echo $sum;
?>