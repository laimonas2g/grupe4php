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

// 7. array_filter()
// Filter elements using a callback function.
$even = array_filter($arr, fn($x) => $x % 2 === 0);

$nums = [1, 2, 3, 4, 5];
$evens = array_filter($nums, fn($n) => $n % 2 === 0, ARRAY_FILTER_USE_KEY);
print_r($evens); // [2, 4]

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

$colors = ["red", "green", "blue"];
$key = array_search("blue", $colors);
echo $key; // 2

// 13. array_slice()
// Extract a slice of the array.
$slice = array_slice($arr, 1, 2);

$input = ["a", "b", "c", "d", "e"];
$output = array_slice($input, 1, 3);
print_r($output); // ["b", "c", "d"]

// 14. array_splice()
// Remove a portion and replace it with something else.
array_splice($arr, 2, 1, [99]);

$input = ["red", "green", "blue", "yellow"];
array_splice($input, 1, 2, ["black", "white"]);
print_r($input); // ["red", "black", "white", "yellow"]

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


echo '<br><hr>';

echo '<pre>';