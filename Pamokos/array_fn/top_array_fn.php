<?php

echo '<pre>';

echo '<br><hr>';


//  1. array_push()
// Add one or more elements to the end of an array.
array_push($arr, $value1, $value2);

$stack = ["apple", "banana"];
array_push($stack, "cherry", "date");
print_r($stack);
// Output: ["apple", "banana", "cherry", "date"]

// 2. array_pop()
// Remove the last element of an array.
$last = array_pop($arr);

$stack = ["apple", "banana", "cherry"];
$fruit = array_pop($stack);
echo $fruit; // Output: cherry
print_r($stack); // ["apple", "banana"]

// 3. array_shift()
// Remove the first element of an array.
$first = array_shift($arr);

$queue = ["apple", "banana", "cherry"];
$fruit = array_shift($queue);
echo $fruit; // Output: apple
print_r($queue); // ["banana", "cherry"]

// 4. array_unshift()
// Add one or more elements to the beginning of an array.
array_unshift($arr, $value1, $value2);

$queue = ["banana", "cherry"];
array_unshift($queue, "apple");
print_r($queue); // ["apple", "banana", "cherry"]

// 5. array_merge()
// Merge one or more arrays.
$merged = array_merge($arr1, $arr2);

$a = ["red", "green"];
$b = ["blue", "yellow"];
$c = array_merge($a, $b);
print_r($c); // ["red", "green", "blue", "yellow"]

// 6. array_map()
// Apply a callback to each element of an array.
$squared = array_map(fn($x) => $x * $x, $arr);

$nums = [1, 2, 3];
$squares = array_map(fn($n) => $n * $n, $nums);
print_r($squares); // [1, 4, 9]

$arr = [1, 2, 3];
$result = array_map(fn($v) => $v === 2 ? 99 : $v, $arr);
// (condition) ? value_if_true : value_if_false
// $result = [1, 99, 3]

// 7. array_filter()
// Filter elements using a callback function.
$even = array_filter($arr, fn($x) => $x % 2 === 0);

// ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value
// ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value
$nums = [1, 2, 3, 4, 5];
$evens = array_filter($nums, fn($n) => $n % 2 === 0, ARRAY_FILTER_USE_KEY);
print_r($evens); // [0, 2, 4]

function odd($var)
{
    // returns whether the input integer is odd
    return $var & 1;
}

function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "Even:\n";
print_r(array_filter($array2, "even"));

// separate an array into odd and even values
$original = [1, 2, 3, 4, 5, 6];
$evens = array_filter($original, fn($v) => $v % 2 === 0); // [2, 4, 6]
$odds  = array_filter($original, fn($v) => $v % 2 !== 0); // [1, 3, 5]

$evens = array_values(array_filter($original, fn($v) => $v % 2 === 0));
$odds  = array_values(array_filter($original, fn($v) => $v % 2 !== 0));

// 8. array_reduce()
// Reduce an array to a single value using a callback.
$sum = array_reduce($arr, fn($carry, $item) => $carry + $item, 0);

$nums = [1, 2, 3, 4];
$sum = array_reduce($nums, fn($carry, $item) => $carry + $item, 0);
echo $sum; // 10

// 9. array_keys()
// Return all the keys of an array.
$keys = array_keys($arr);

$arr = ["a" => 1, "b" => 2, "c" => 3];
$keys = array_keys($arr);
print_r($keys); // ["a", "b", "c"]

// 10. array_values()
// Return all the values of an array.
$values = array_values($arr);

$arr = ["a" => 1, "b" => 2, "c" => 3];
$values = array_values($arr);
print_r($values); // [1, 2, 3]

// 11. in_array()
// Check if a value exists in an array.
$exists = in_array($needle, $arr);

$colors = ["red", "green", "blue"];
if (in_array("green", $colors)) {
    echo "Green is in the array!";
}

// 12. array_search()
// Search for a value and return its key.
$key = array_search($needle, $arr);
// Returns the key for needle if it is found in the array, false otherwise.
// If needle is found in haystack more than once, the first matching key is returned. 
// To return the keys for all matching values, 
// use array_keys() with the optional filter_value parameter instead.

$colors = ["red", "green", "blue"];
$key = array_search("blue", $colors);
echo $key; // 2

// 13. array_slice()
// Extract a slice of the array.
$slice = array_slice($arr, 1, 2);

$input = ["a", "b", "c", "d", "e"];
$output = array_slice($input, 1, 3);
print_r($output); // ["b", "c", "d"]

$original = [1, 2, 3, 4, 5, 6];
// Split after 3 elements
$firstPart  = array_slice($original, 0, 3); // [1, 2, 3]
$secondPart = array_slice($original, 3);    // [4, 5, 6]

// Find the index and split:
$original = [1, 2, 3, 4, 5, 6];
$splitAt = 4;
$index = array_search($splitAt, $original); // returns 3

$firstPart = array_slice($original, 0, $index);     // [1, 2, 3]
$secondPart = array_slice($original, $index);       // [4, 5, 6]

// 14. array_splice()
// Remove a portion and replace it with something else.
array_splice($arr, 2, 1, [99]);

$input = ["red", "green", "blue", "yellow"];
array_splice($input, 1, 2, ["black", "white"]);
print_r($input); // ["red", "black", "white", "yellow"]

$array1 = ["a" => "red", "b" => "green"];
$array2 = ["a" => "yellow", "b" => "blue", "c" => "pink"];
$result = array_replace($array1, $array2);
// $result = ['a' => 'yellow', 'b' => 'blue', 'c' => 'pink']



// 15. array_unique()
// Remove duplicate values.
$unique = array_unique($arr);

$input = ["a", "b", "a", "c", "b"];
$output = array_unique($input);
print_r($output); // ["a", "b", "c"]

// 16. array_column()
// Return the values from a single column in a multidimensional array.
$names = array_column($users, 'name');

$records = [
    ["id" => 1, "name" => "Alice"],
    ["id" => 2, "name" => "Bob"]
];
$names = array_column($records, "name");
print_r($names); // ["Alice", "Bob"]

// 17. array_combine()
// Create an array by using one array for keys and another for values.
$combined = array_combine($keys, $values);

$keys = ["a", "b", "c"];
$values = [1, 2, 3];
$combined = array_combine($keys, $values);
print_r($combined); // ["a" => 1, "b" => 2, "c" => 3]

// 18. array_diff()
// Compute the difference of arrays.
$diff = array_diff($arr1, $arr2);

$a = [1, 2, 3, 4];
$b = [2, 4, 6];
$diff = array_diff($a, $b);
print_r($diff); // [1, 3]

// 19. array_intersect()
// Compute the intersection of arrays.
$common = array_intersect($arr1, $arr2);

$a = [1, 2, 3, 4];
$b = [2, 4, 6];
$inter = array_intersect($a, $b);
print_r($inter); // [2, 4]

// 20. array_walk()
// Apply a callback function to each element.
array_walk($arr, fn(&$v) => $v *= 2);

$numbers = [1, 2, 3];
array_walk($numbers, function(&$v, $k) { $v = $v * 2; });
print_r($numbers); // [2, 4, 6]

// 21. array_rand()
// Pick one or more random keys out of an array

$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 2);
echo $input[$rand_keys[0]] . "\n";
echo $input[$rand_keys[1]] . "\n";

$letters = ['A', 'B', 'C', 'D'];
$randomLetter = $letters[array_rand($letters)];

// 22. array_chunk()
// Split into chunks of N elements
$original = [1, 2, 3, 4, 5, 6];
$chunks = array_chunk($original, 3); // [[1,2,3], [4,5,6]]
// $chunks[0] and $chunks[1] two arrays

// 23. array_fill_keys()
// Replace all values with a specific value
$keys = ['a', 'b', 'c'];
$result = array_fill_keys($keys, 'newvalue');
// $result = ['a' => 'newvalue', 'b' => 'newvalue', 'c' => 'newvalue']

<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['apple', 'banana', 'orange'];

// Get array length
echo count($fruits);

// Search array
echo in_array('banana', $fruits);

// Add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi'); // Adds to the beginning

// Remove from array
array_pop($fruits); // Removes last
array_shift($fruits); // Removes first
// Remove specific element
unset($fruits[2]);

// Split into chunks of 2
$chunkedArray = array_chunk($fruits, 2);
var_dump($chunkedArray);

// Concatenate arrays
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);
var_dump($arr3);
$arr4 = [...$arr1, ...$arr2]; // Use Spread
var_dump($arr4);

// Combine arrays (Keys & values)
$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);

// Array of keys
$keys = array_keys($c);

// Flip keys with values
$flipped = array_flip($c);
var_dump($flipped);

// Create array of numbers with range()
$numbers = range(1, 20);

// Map through array and create a new one
$newNumbers = array_map(function ($number) {
  return "Number ${number}";
}, $numbers);

// Filter array
$lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);

echo '<br><hr>';

echo '<pre>';