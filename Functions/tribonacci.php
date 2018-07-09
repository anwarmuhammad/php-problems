<?php
function tibonnacciSeries($index) {
	$series = " 0 1 1 ";
	$n = 0;
	$x = 0;
	$y = 1;
	$z = 1;

	for ($i = 0; $i <= 10; $i++) {
		$n = $x + $y + $z;
		$x = $y;
		$y = $z;
		$z = $n;

		$series = $series . $n . " ";
	}

	echo "Tribonacci Series: " . $series;
	echo "<hr>";
	$series2 = explode(" ", $series);

	echo "Number of " . $index . " th position is : " . $series2[$index];

}

tibonnacciSeries(9);

?>