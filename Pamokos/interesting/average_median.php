<?php

echo '<pre>';

echo '<br><hr>';

// Average (Mean)
$numbers = [1, 2, 3, 4, 5];
$average = array_sum($numbers) / count($numbers); // Result: 3
// Use it for: When you want to know the “overall” 
// or typical value, and your data 
// doesn’t have extreme values (outliers).


// Median
$numbers = [1, 2, 3, 4, 100];
sort($numbers);
$middle = floor(count($numbers) / 2);
$median = $numbers[$middle]; // Result: 3
// Use it for: When you want to know the “middle” value, 
// especially if your data might have some really large 
// or small numbers (outliers).

// Average can be skewed by outliers. For example, 
// [1, 2, 3, 4, 100] has an average of 22, 
// but most numbers are much lower.
// Median gives you a better idea of what a “typical” 
// value is when your data isn’t balanced.

// Summary:
// Use average for balanced data.
// Use median to avoid being tricked by outliers when 
// summarizing your data in code.


echo '<br><hr>';

echo '</pre>';