<?php

function LongestWord($sen) {

	$words = explode(' ', $sen);

	$longestWordLength = 0;
	$longestWord = '';

	foreach ($words as $word) {
		if (strlen($word) > $longestWordLength) {
			$longestWordLength = strlen($word);
			$longestWord = $word;
		}
	}

	echo $longestWord;

}

// keep this function call here
print_r(LongestWord("Anwar Muhammad is a good boy in Bangladesh"));

?>

