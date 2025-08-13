<?php

/* Functions */

/* 1. Write a function that takes a string as an argument and returns the string wrapped in 
<b> tags. */


/* 2. Write a function with two arguments: a string and a number n (1-6). 
Return the string wrapped in an h tag of level n (e.g., <h3>text</h3>). */


/* 3. Generate a random string using uniqid(). 
Wrap all alphabetic characters in <i> tags, leaving numbers as they are. 
If several letters are in a row, wrap them together in one <i> tag. 
Use preg_replace_callback(). */


/* 4. Write a function that counts how many divisors (other than 1 and itself) 
the given integer has. Only accept positive integers as input. */


/* 5. Generate an array of 100 elements with random values from 10 to 99. 
Sort the array in descending order by the sum of their digits, using a helper function. */


/* 6. Generate an array of 100 elements with random values from 150 to 300. 
Remove all numbers that are even from the array, using a helper function. */


/* 7. Generate a random-length array (length from 8 to 16), where every 
element except the last is a random number from 1 to 20, 
and the last element is an array with the same structure. 
Repeat this process a random number of times (from 5 to 15). 
The last array in the chain has the value null as its last element. */


/* 8. Calculate the sum of all numeric values (not arrays) in the structure 
from the previous task, traversing all levels recursively. */


/* 9. Generate an array of four elements with random numbers from 1 to 40. 
If any of the last four elements is not odd, add another random number 
(from 1 to 40) to the array and repeat the check. 
Continue until the last four elements are all odd. */


/* 10. Generate an array of 10 elements, 
each of which is an array of 10 random numbers from 1 to 50. 
If the average of all numbers divisible by 5 in the large array is less than 20, 
find the largest number (not necessarily divisible by 5) and subtract 2 from it. 
Repeat until the average is at least 20. */


/* 11. Generate an array of random length (from 12 to 50). 
The values are either random numbers (0-100) or arrays. The ratio is random, 
but numbers should be more frequent than arrays. Sub-arrays have a random length from 1 to 4, 
and their values are similar (50%-100% numbers, the rest arrays), 
and so on until all final values are numbers. 
Calculate how many elements are in the main array. 
Calculate the sum of all numeric elements. 
Calculate the maximal depth of the array. 
Visualize the array as a nested unordered list (<ul><li>), 
each list with a unique id and background color (the color can be just a placeholder). */


/* 12. Write a function that returns the factorial of a given number using recursion. */


/* 13. Write a function that takes a string of numbers separated by commas and 
returns an array of integers. */


/* 14. Write a function that receives an array and returns a new array with only unique values, 
preserving the original order. */


/* 15. Write a function that takes a string and returns an array of words that appear 
more than once in the string, case insensitive. */


/* ADVANCED EXERCISES */


/* 16. Write a function that takes a multidimensional array (arbitrary depth) 
containing both arrays and numbers, and returns the sum of the largest number 
in each array at every nesting level. */


/* 17. Write a function that, given an array of integers, returns all unique 
pairs of numbers whose sum is a prime number (no duplicate pairs). */


/* 18. Write a function that, given a date string (YYYY-MM-DD), 
returns the ISO week number. */


/* 19. Write a function that generates a 2D array representing a chessboard of size n x n, 
where "B" and "W" represent black and white squares, starting with "B" in the top-left. */


/* 20. Write a function that takes a string and returns the same string, 
but reverses the order of all words that start with a vowel. */


?>

/*  ------------------------------------------------------------------- */

<?php

/* PHP Function Exercises (From Easy to Advanced) */


/* 1. Write a function that takes a string as an argument and 
returns the number of vowels in the string. */


## 2. Write a function that takes two arguments: a string and a character. The function should return the number of times the character appears in the string.


## 3. Write a function that takes an array of numbers and returns the sum of all even numbers in the array.


## 4. Write a function that takes an integer as an argument and returns `true` if the number is a palindrome, or `false` otherwise.


## 5. Write a function that accepts a string and returns the same string, but with every word capitalized.


## 6. Write a function that takes a multidimensional array (array of arrays) and flattens it into a single one-dimensional array.


## 7. Write a function that takes a string and returns it with all duplicate characters removed (preserving the order of first appearance).


## 8. Write a function that receives an array of integers and returns a new array containing only those numbers that are prime.


## 9. Write a function that generates a random password of a given length, using uppercase, lowercase, numbers, and special characters.


## 10. Write a function that takes an array of numbers and sorts it by the sum of the digits of each number in descending order.


## 11. Write a function that finds and returns the longest word in a given sentence.


## 12. Write a recursive function that calculates the greatest common divisor (GCD) of two numbers.


## 13. Write a function that, given a date string (YYYY-MM-DD), returns the day of the week in English (e.g., "Monday").


# ADVANCED EXERCISES


## 14. Write a function that takes a nested array (of arbitrary depth, containing both arrays and integers) and returns the maximum depth of nesting.


## 15. Write a function that, given an array of integers, returns all unique combinations of three numbers that sum up to zero (no duplicate combinations).



## 16. Write a function that takes a string and returns a new string where every number (one or more digits in a row) is wrapped in a `<span>` tag, preserving the rest of the text as is. Use `preg_replace_callback()`.


## 17. Write a function that generates a 2D array representing a multiplication table (from 1 to a given n), where each element is the product of its row and column indices.


## 18. Write a function that, given a multidimensional array containing both numbers and arrays, returns the average of all numbers found at the deepest level(s) of nesting.

?>