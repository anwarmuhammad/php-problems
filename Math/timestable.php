<?php

for ($row = 1; $row <= 10; $row++) {
	echo "Times table of " . $row . ": ";
	for ($column = 1; $column <= 10; $column++) {
		echo $row * $column . " ";
	}

	echo "<hr>";

}

?>