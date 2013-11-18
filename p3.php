<?php
set_time_limit (30);
$n = 600851475143;
echo "<h3>Prime Factors</h3>";
for ($i=2; $i<($n/2); $i++) {
if($i%2!=0) { //not considering even factors
	if ($n%$i==0) { //if I is a factor of N
	    $f=0; //setting default flag value
		for ($j=2;$j<=($i/2);$j++) { //finding factors of I
			if ($i%$j==0) {$f=1;} //checking if I is prime
		}
		if ($f==0) { //checking if flag value changed
			echo $i."<br>";
		}
	}
}
}
?>