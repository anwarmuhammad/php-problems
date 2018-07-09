<?php
echo "Positive Number  Series : ";
for ($i = 0; $i <= 20; $i++) {

	echo $i . " ";

}
echo "<hr>";

echo "Even Number Series : ";
for ($i = 0; $i <= 20; $i = $i + 2) {

	echo $i . " ";

}

echo "<hr>";

echo "Odd Numer Series : ";
for ($i = 1; $i <= 20; $i = $i + 2) {

	echo $i . " ";

}

echo "<hr>";

echo "Number series increases by 3 : ";
for ($i = 1; $i <= 20; $i = $i + 3) {

	echo $i . " ";
}

echo "<hr>";

echo "Number series where even numers get doubled : ";
for ($i = 1; $i <= 20; $i++) {

	if (($i % 2) == 0) {
		echo $i * 2 . " ";
	} else {
		echo $i . " ";
	}

}

echo "<hr>";

echo "Number series of Square of itself minus One : ";
for ($i = 1; $i <= 10; $i++) {
	$result = ($i * $i) - 1;
	echo $result . " ";

}

echo "<hr>";

echo "Fibonacci Series : ";
$series = " 0 1 ";
$n = 0;
$x = 0;
$y = 1;

for ($i = 0; $i <= 10; $i++) {

	$n = $x + $y;
	$x = $y;
	$y = $n;
	$series = $series . $n . " ";
}
echo $series;

echo "<hr>";
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

print_r($series2[7]);
