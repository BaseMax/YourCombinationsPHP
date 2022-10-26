<?php
/*
 * Name: Your Combinations PHP
 * Author: Max Base
 * Date: 2022/10/05
 * Repository: https://github.com/basemax/YourCombinationsPHP
 */

class YourCombinations {
	private $elements = [];
	
	public function __construct($elements) {
		$this->elements = array_values($elements);
	}
	
	public function Combinations($length, $with_repetition = false, $position = 0, $elements = []) {
		$items_count = count($this->elements);
		for ($i = $position; $i < $items_count; $i++) {
			$elements[] = $this->elements[$i];
				if (count($elements) == $length) yield $elements;
			else foreach ($this->Combinations($length, $with_repetition, ($with_repetition == true ? $i : $i + 1), $elements) as $value2) yield $value2;
			array_pop($elements);
		}
	}

	public function Permutations($length, $with_repetition = false, $elements = [], $keys = []) {
		foreach($this->elements as $key => $value) {
			if ($with_repetition == false) if (in_array($key, $keys)) continue;
			$keys[] = $key;
			$elements[] = $value;
			if (count($elements) == $length) yield $elements;
			else foreach ($this->Permutations($length, $with_repetition, $elements, $keys) as $value2) yield $value2;
			array_pop($keys);
			array_pop($elements);
		}
	}
}
