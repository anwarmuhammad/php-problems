<?php

// a script using a for loop to add all the integers between 0 and 30 and display the total
echo 'The sum of the numbers 0 to 30 is :  ';
$total = 0;
for ($i = 1; $i <= 30; $i++) {

	$total = $total + $i;

}
echo $total;
?>
