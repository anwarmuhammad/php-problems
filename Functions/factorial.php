<?php

function factorial1($n) {

	if ($n < 0) {

		echo "Factorial of negative number does not exist";
	} else {

		$factorial = 1;

		for ($i = 1; $i <= $n; $i++) {

			$factorial = $factorial * $i;

		}

		echo $factorial;
	}

}

factorial1(-3);
