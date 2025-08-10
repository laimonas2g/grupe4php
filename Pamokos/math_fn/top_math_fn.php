<?php

echo '<pre>';

echo '<br><hr>';

# Top 20 Most Used Math Functions in PHP

## 1. `abs()`
// **Description:**  
// Returns the absolute value of a number.
echo abs(-5); // 5
echo abs(7);  // 7

## 2. `ceil()`
// **Description:**  
// Rounds fractions up to the next highest integer.
echo ceil(4.3);  // 5
echo ceil(-4.3); // -4

// ## 3. `floor()`
// **Description:**  
// Rounds fractions down to the next lowest integer.
echo floor(4.7);  // 4
echo floor(-4.7); // -5

// ## 4. `round()`
// **Description:**  
// Rounds a float to a specified number of decimal places.
echo round(3.456, 2);    // 3.46
echo round(3.456, 0);    // 3
echo round(3.5);         // 4

// ## 5. `max()`
// **Description:**  
// Finds the highest value in a list of numbers or an array.
echo max(1, 5, 3);                 // 5
echo max([2, 4, 8, 6]);            // 8
$arr = [10, 20, 5, 7];
echo max($arr);                    // 20

// ## 6. `min()`
// **Description:**  
// Finds the lowest value in a list of numbers or an array.
echo min(1, 5, 3);                 // 1
echo min([2, 4, 8, 6]);            // 2
$arr = [10, 20, 5, 7];
echo min($arr);                    // 5

// ## 7. `sqrt()`
// **Description:**  
// Returns the square root of a number.
echo sqrt(16);  // 4
echo sqrt(2);   // 1.41421356237

// ## 8. `pow()`
// **Description:**  
// Raises a number to the power of another number.
echo pow(2, 3);   // 8
echo pow(9, 0.5); // 3 (square root)

// ## 9. `exp()`
// **Description:**  
// Returns e raised to the power of a number.
echo exp(1);   // 2.718281828459 (the value of e)
echo exp(2);   // 7.389056098931

// ## 10. `log()`
// **Description:**  
// Returns the natural logarithm of a number, or the logarithm to a specified base.
echo log(8, 2);   // 3 (log base 2 of 8)
echo log(100);    // 4.605170185988 (natural log, base e)

// ## 11. `log10()`
// **Description:**  
// Returns the base-10 logarithm of a number.
echo log10(100);  // 2
echo log10(1000); // 3

// ## 12. `pi()`
// **Description:**  
// Returns the value of π (pi).
echo pi(); // 3.1415926535898

// ## 13. `deg2rad()`
// **Description:**  
// Converts degrees to radians.
echo deg2rad(180); // 3.1415926535898 (π radians)

// ## 14. `rad2deg()`
// **Description:**  
// Converts radians to degrees.
echo rad2deg(pi()); // 180

// ## 15. `sin()`
// **Description:**  
// Returns the sine of a number (in radians).
echo sin(pi()/2); // 1
echo sin(0);      // 0

// ## 16. `cos()`
// **Description:**  
// Returns the cosine of a number (in radians).
echo cos(0);      // 1
echo cos(pi());   // -1

// ## 17. `tan()`
// **Description:**  
// Returns the tangent of a number (in radians).
echo tan(pi()/4); // 1
echo tan(0);      // 0

// ## 18. `rand()`
// **Description:**  
// Generates a random integer (optionally between two values).
echo rand();         // random integer
echo rand(1, 10);    // random integer between 1 and 10

// ## 19. `mt_rand()`
// **Description:**  
// Generates a better random integer using the Mersenne Twister algorithm.

echo mt_rand();         // random integer
echo mt_rand(1, 100);   // random integer between 1 and 100


// ## 20. `number_format()`
// **Description:**  
// Formats a number with grouped thousands and optional decimals.

echo number_format(1234567.891, 2); // 1,234,567.89
echo number_format(10000);          // 10,000

// ## 21. intdiv($dividend, $divisor)
// **Description:**  
// performs integer division.

echo intdiv(10, 3); // Output: 3


echo '<br><hr>';

echo '</pre>';