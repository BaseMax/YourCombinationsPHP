<?php
require "YourCombinations.php";

// Eaxmple
$n = 4;
$k = [1, 2, 3];

$combinations = new YourCombinations($k);

foreach ($combinations->Permutations($n, true) as $item) {
	print_r($item);
}

print("=====================");

foreach ($combinations->Combinations($n, true) as $item) {
	print_r($item);
}

print("=====================");

foreach ($combinations->Permutations(2, false) as $item) {
	print_r($item);
}

print("=====================");

foreach ($combinations->Combinations(2, false) as $item) {
	print_r($item);
}

print("=====================");

foreach ($combinations->PowerSet() as $item) {
	print_r($item);
}
// print_r([...$combinations->PowerSet()]);
