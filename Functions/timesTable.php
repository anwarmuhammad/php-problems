<?php

function timestableOf($input, $range) {
	echo "Times Table of " . $input . " upto " . $range . " : <br>";
	for ($i = 1; $i <= $range; $i++) {

		echo $input . "*" . $i . "=" . $input * $i . " <br>";
	}

}
timestableOf(5, 8);
