<?php
require "YourCombinations.php";

// Eaxmple
$n = 4;
$k = [1, 2, 3];

$combinations = new YourCombinations($k);

foreach ($combinations->permutations($n, true) as $item) {
	print_r($item);
}

print("=====================");

foreach ($combinations->combinations($n, true) as $item) {
	print_r($item);
}

print("=====================");

foreach ($combinations->permutations(2, false) as $item) {
	print_r($item);
}

print("=====================");

foreach ($combinations->combinations(2, false) as $item) {
	print_r($item);
}

print("=====================");

foreach ($combinations->powerSet() as $item) {
	print_r($item);
}
// print_r([...$combinations->powerSet()]);
