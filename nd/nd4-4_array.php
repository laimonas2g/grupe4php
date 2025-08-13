<?php

# PHP Array Manipulation Exercises

/* Use PHP's `rand()` function to generate random array values for all exercises. */


/* 1. Create an array of 12 elements with random values between 10 and 30. */

/* 2. Count how many values in the array from exercise 1 are odd numbers. */

/* 3. Find the smallest value in the array from exercise 1 and its index or indices 
(if there are more than one). */

/* 4. Calculate the sum of all elements in the array from exercise 1. */

/* 5. Create a new array where each value is the difference between the original value 
and its index (from exercise 1). */

/* 6. Add 3 more elements with random values from 10 to 30 to the array from exercise 1, 
so the total number of elements is 15. */

/* 7. Split the array from exercise 6 into two arrays: one with values greater than 20, 
and one with values less than or equal to 20. */

/* 8. Change all values with indices divisible by 3 in the array from exercise 6 
to -1 if they are less than 15. */

/* 9. Find the last index in the array from exercise 6 with a value greater than 25. */

/* 10. Remove all elements from the array from exercise 6 whose indices are divisible by 2. */

/* 11. Generate an array of 50 elements, each being a random lowercase letter ('a' to 'd'). 
Count how many times each letter occurs. */

/* 12. Sort the array from exercise 11 in reverse alphabetical order. */

/* 13. Generate two arrays as in exercise 11. Merge both arrays, 
then count how many unique letters and unique 2-letter combinations exist. */

/* 14. Generate two arrays of 20 unique random integers from 40 to 80. */

/* 15. Create an array with values that appear only in the first array of exercise 14 but not in the second. */

/* 16. Create an array of values that appear in both arrays from exercise 14. */

/* 17. Create an associative array where keys are values from the first array of exercise 14, 
and values are from the second array (matching by position). 
If arrays differ in length, stop at the shorter one. */

/* 18. Generate a 7-element array where the first number is random from 1 to 8. 
Each next number is the previous number multiplied by a random number from 2 to 3. */

/* 19. Generate a 25-element array of random numbers from 1 to 40. 
Replace any even values with their half (integer division). 
Sort the array in descending order. Find the sum of the first and last elements. */

/* 20. Generate a 2D array (5x5) where each value is a random number from 15 to 45. 
Find the sum of all values in each row and in each column. */

/* 21. Create an array of 18 random numbers from 1 to 25. 
Create a new array where each value is the average of itself and its left and right neighbor. 
For the first and last elements, use only two values (self and neighbor). Round averages to whole numbers. */

/* 22. Generate an array of 35 random numbers from 1 to 150. 
Find the longest increasing subsequence (not necessarily consecutive) in the array. 
Output its length and the subsequence itself. */

/* 23. Generate a 3D array of size 2x2x2, where each value is a random integer from 5 to 20. 
Find the maximum value in the 3D array and its coordinates (all positions where it occurs). */

/* ------------------------------------- */

/* 1. Create an array of 10 random integers between 1 and 100.
    Output the array. */

/* 2. Add the value 55 to the end of your array.
    Output the updated array. */

/* 3. Remove the last element from your array.
    Output the updated array. */

/* 4. Remove the first element from your array.
    Output the updated array. */

/* 5. Add the value 5 to the beginning of your array.
    Output the updated array. */

/* 6. Merge your array with another array of 5 random integers between 1 and 100.
    Output the merged array. */

/* 7. Extract a slice of your array containing elements from index 2 to index 6 (inclusive).
    Output the sliced array. */

/* 8. Remove 3 elements from your array starting at index 4 and insert the values 99 and 100 at that position.
    Output the updated array. */

/* 9. Multiply every element of your array by 2 and create a new array with the results.
    Output the new array. */

/* 10. Filter your array to include only values greater than 50.
     Output the filtered array. */

/* 11. Calculate the sum of all elements in your array.
     Output the result. */

/* 12. Sort your array in descending order.
     Output the sorted array. */

/* 13. Create an array of 20 random integers between 10 and 50.
     Find and output all values that are odd numbers. */

/* 14. From your array, find the minimum value and all indices where it occurs.
     Output the value and indices. */

/* 15. Create a new array where each element is the original value minus its index.
     Output the new array. */

/* 16. Add 5 more random values between 10 and 50 to your array so it contains 25 elements.
     Output the updated array. */

/* 17. Split your array into two arrays: one with values greater than 30, and one with values less than or equal to 30.
     Output both arrays. */

/* 18. Change all values at indices divisible by 5 to -1 if they are less than 25.
     Output the updated array. */

/* 19. Find and output the last index with a value greater than 40. */

/* 20. Remove all elements whose indices are divisible by 3 from your array.
     Output the updated array. */

/* 21. Generate an array of 100 random letters from 'a' to 'd'.
     Count and output how many times each letter appears. */

/* 22. Sort the array of letters in reverse alphabetical order.
     Output the sorted array. */

/* 23. Generate two arrays of 100 random letters from 'a' to 'd'.
     Merge them and count how many unique letters and unique 3-letter combinations exist.
     Output the counts. */

/* 24. Generate two arrays of 50 unique random numbers between 100 and 199.
     Output both arrays. */

/* 25. Create a new array containing values that appear in the first array but not in the second.
     Output the new array. */

/* 26. Create a new array containing only values that appear in both arrays.
     Output the new array. */

/* 27. Create an associative array where keys are values from the first array and values are from the second array (by position).
     Output the associative array. */

/* 28. Generate an array of 10 elements where the first element is random from 1 to 10, 
and each next element is the previous one multiplied by a random number from 2 to 4.
     Output the array. */

/* 29. Generate a 30-element array of random numbers from 1 to 50.
     Replace even values with their half (integer division), sort the array descending, 
     and find the sum of the first and last elements.
     Output the final array and the sum. */

/* 30. Create a 2D array (6x6) of random numbers from 20 to 60.
     Find and output the sum of each row and each column. */

/* 31. Generate an array of 25 random numbers from 1 to 30. Create a new array where each value is 
     the average of itself and its left and right neighbor (first and last use only 2 values).
     Round averages to integers.  Output the new array. */

/* 32. Generate an array of 40 random numbers from 1 to 300.
     Find the longest increasing subsequence (not necessarily consecutive), output its length and the subsequence itself. */

/* 33. Generate a 3D array of size 3x3x3 with random numbers from 5 to 25.
     Find the maximum value and all its coordinates.
     Output the value and coordinates. */

/* ------------------------------------- */

/* Use PHP's rand() function to generate random array values for all exercises. */

/* question 1
   Create an array of 8 random integers between 10 and 50. 
   Add two more random values (between 10 and 50) to the end of your array.
   Output the updated array.
*/

/* question 2
   Remove the last element from an array of 12 random integers between 1 and 40.
   Output the updated array.
*/

/* question 3
   Remove the first element from an array of 10 random integers between 5 and 30.
   Output the updated array.
*/

/* question 4
   Add three random values (between 10 and 30) to the beginning of an array containing 7 random integers between 10 and 30.
   Output the updated array.
*/

/* question 5
   Generate an array of 14 random integers between 1 and 100.
   Extract a subarray containing elements from index 3 to index 8 (inclusive).
   Output the subarray.
*/

/* question 6
   Create an array of 10 random integers between 1 and 20.
   Remove 3 elements starting at index 5 and insert two random numbers (between 1 and 20) at that position.
   Output the modified array.
*/

/* question 7
   Generate an array of 15 random integers between 5 and 25.
   Create a new array where every element is squared.
   Output the new array.
*/

/* question 8
   Generate an array of 12 random integers between 10 and 40.
   Create a new array that includes only the values greater than 25.
   Output the new array.
*/

/* question 9
   Create an array of 10 random integers between 1 and 30.
   Calculate and output the product of all elements in the array.
*/

/* question 10
   Generate an array of 20 random integers between 1 and 60.
   Find and output the sum of all odd numbers in the array.
*/

/* ------------------------------------- */

/* 
$numbers = [1, 2, 3, 4, 5];

// array_merge
Merges one or more arrays together.
$new = array_merge($numbers, [6, 7]);

// array_push
Adds one or more elements to the end of an array.
array_push($numbers, 6);

// array_pop
Removes and returns the last element of an array.
$last = array_pop($numbers);

// array_shift
Removes and returns the first element of an array.
$first = array_shift($numbers);

// array_unshift
Adds one or more elements to the beginning of an array.
array_unshift($numbers, 0);

// array_slice
Extracts a portion of an array.
$slice = array_slice($numbers, 1, 3);

// array_splice
Removes/replaces elements of an array.
array_splice($numbers, 2, 2, [9, 10]);

// array_map
Applies a callback to the elements of an array.
$squared = array_map(fn($x) => $x * $x, $numbers);

// array_filter
Filters elements of an array using a callback function.
$even = array_filter($numbers, fn($x) => $x % 2 === 0);

// array_reduce
Iteratively reduces the array to a single value using a callback.
$sum = array_reduce($numbers, fn($carry, $item) => $carry + $item, 0);
*/     

?>