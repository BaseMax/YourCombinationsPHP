# Your Combinations PHP

An efficient combinatorics library for PHP 8 to generate and get the list of all **Permutations** and **Combinations** with the ability to enable or disable repetition. (utilizing generators)

## Functions

- [PowerSet](#powerset)
- [Permutation with repetition](#permutation-with-repetition)
- [Permutation without repetition](#permutation-without-repetition)
- [Combinations with repetition](#combinations-with-repetition)
- [Combinations without repetition](#combinations-without-repetition)

## Usage

### PowerSet

```php
$your_combinations = new YourCombinations([1, 2, 3]);
print_r([...$your_combinations->powerSet()]);

// [
//   [],       [ 1 ],
//   [ 2 ],    [ 1, 2 ],
//   [ 3 ],    [ 1, 3 ],
//   [ 2, 3 ], [ 1, 2, 3 ]
// ]
```

### Permutation with repetition

```php
$your_combinations = new YourCombinations([1, 2, 3]);
$your_combinations->Permutations(4, true);

// [ 1, 1, 1, 1 ]
// [ 1, 1, 1, 2 ]
// [ 1, 1, 1, 3 ]
// [ 1, 1, 2, 1 ]
// [ 1, 1, 2, 2 ]
// [ 1, 1, 2, 3 ]
// [ 1, 1, 3, 1 ]
// [ 1, 1, 3, 2 ]
// [ 1, 1, 3, 3 ]
// [ 1, 2, 1, 1 ]
// [ 1, 2, 1, 2 ]
// [ 1, 2, 1, 3 ]
// [ 1, 2, 2, 1 ]
// [ 1, 2, 2, 2 ]
// [ 1, 2, 2, 3 ]
// [ 1, 2, 3, 1 ]
// [ 1, 2, 3, 2 ]
// [ 1, 2, 3, 3 ]
// [ 1, 3, 1, 1 ]
// [ 1, 3, 1, 2 ]
// [ 1, 3, 1, 3 ]
// [ 1, 3, 2, 1 ]
// [ 1, 3, 2, 2 ]
// [ 1, 3, 2, 3 ]
// [ 1, 3, 3, 1 ]
// [ 1, 3, 3, 2 ]
// [ 1, 3, 3, 3 ]
// [ 2, 1, 1, 1 ]
// [ 2, 1, 1, 2 ]
// [ 2, 1, 1, 3 ]
// [ 2, 1, 2, 1 ]
// [ 2, 1, 2, 2 ]
// [ 2, 1, 2, 3 ]
// [ 2, 1, 3, 1 ]
// [ 2, 1, 3, 2 ]
// [ 2, 1, 3, 3 ]
// [ 2, 2, 1, 1 ]
// [ 2, 2, 1, 2 ]
// [ 2, 2, 1, 3 ]
// [ 2, 2, 2, 1 ]
// [ 2, 2, 2, 2 ]
// [ 2, 2, 2, 3 ]
// [ 2, 2, 3, 1 ]
// [ 2, 2, 3, 2 ]
// [ 2, 2, 3, 3 ]
// [ 2, 3, 1, 1 ]
// [ 2, 3, 1, 2 ]
// [ 2, 3, 1, 3 ]
// [ 2, 3, 2, 1 ]
// [ 2, 3, 2, 2 ]
// [ 2, 3, 2, 3 ]
// [ 2, 3, 3, 1 ]
// [ 2, 3, 3, 2 ]
// [ 2, 3, 3, 3 ]
// [ 3, 1, 1, 1 ]
// [ 3, 1, 1, 2 ]
// [ 3, 1, 1, 3 ]
// [ 3, 1, 2, 1 ]
// [ 3, 1, 2, 2 ]
// [ 3, 1, 2, 3 ]
// [ 3, 1, 3, 1 ]
// [ 3, 1, 3, 2 ]
// [ 3, 1, 3, 3 ]
// [ 3, 2, 1, 1 ]
// [ 3, 2, 1, 2 ]
// [ 3, 2, 1, 3 ]
// [ 3, 2, 2, 1 ]
// [ 3, 2, 2, 2 ]
// [ 3, 2, 2, 3 ]
// [ 3, 2, 3, 1 ]
// [ 3, 2, 3, 2 ]
// [ 3, 2, 3, 3 ]
// [ 3, 3, 1, 1 ]
// [ 3, 3, 1, 2 ]
// [ 3, 3, 1, 3 ]
// [ 3, 3, 2, 1 ]
// [ 3, 3, 2, 2 ]
// [ 3, 3, 2, 3 ]
// [ 3, 3, 3, 1 ]
// [ 3, 3, 3, 2 ]
// [ 3, 3, 3, 3 ]
```

### Permutation without repetition

```php
$your_combinations = new YourCombinations([1, 2, 3]);
$your_combinations->Permutations(2, false);

// [ 1, 2 ]
// [ 1, 3 ]
// [ 2, 1 ]
// [ 2, 3 ]
// [ 3, 1 ]
// [ 3, 2 ]
```

### Combinations with repetition

```php
$your_combinations = new YourCombinations([1, 2, 3]);
$your_combinations->Combinations(4, true);

// [ 1, 1, 1, 1 ]
// [ 1, 1, 1, 2 ]
// [ 1, 1, 1, 3 ]
// [ 1, 1, 2, 2 ]
// [ 1, 1, 2, 3 ]
// [ 1, 1, 3, 3 ]
// [ 1, 2, 2, 2 ]
// [ 1, 2, 2, 3 ]
// [ 1, 2, 3, 3 ]
// [ 1, 3, 3, 3 ]
// [ 2, 2, 2, 2 ]
// [ 2, 2, 2, 3 ]
// [ 2, 2, 3, 3 ]
// [ 2, 3, 3, 3 ]
// [ 3, 3, 3, 3 ]
```

### Combinations without repetition

```php
$your_combinations = new YourCombinations([1, 2, 3]);
$your_combinations->Combinations(2, false);

// [ 1, 2 ]
// [ 1, 3 ]
// [ 2, 3 ]
```

© Copyright, 2022 Max Base
