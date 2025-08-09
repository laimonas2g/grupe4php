<?php

echo '<pre>';

echo '<br><hr>';

## 1. `for` Loop
// Used when you know in advance how many times
//  you want to execute a statement or a block of statements.

// **Example 1: Print numbers 0 to 4**
for ($i = 0; $i < 5; $i++) {
    echo "The number is $i <br>";
}

// **Example 2: Sum numbers 1 to 5**
$sum = 0;
for ($i = 1; $i <= 5; $i++) {
    $sum += $i;
}
echo "Sum is $sum"; // Outputs: Sum is 15


## 2. `while` Loop
// Executes a block of code as long as a specified 
// condition is true.

// **Example 1: Print numbers 0 to 4**
$i = 0;
while ($i < 5) {
    echo "The number is $i <br>";
    $i++;
}

// **Example 2: Find the first even number greater than 10**
$num = 11;
while ($num % 2 != 0) {
    $num++;
}
echo "First even number greater than 10 is $num"; // Outputs: 12


## 3. `do...while` Loop
// Will always execute the block of code once, 
// then check the condition and repeat if it is true.

// **Example 1: Print numbers 0 to 4**
$i = 0;
do {
    echo "The number is $i <br>";
    $i++;
} while ($i < 5);

// **Example 2: Prompt until user input is "yes"**
do {
    $input = readline("Type 'yes' to continue: ");
} while ($input !== "yes");
echo "You typed yes!";
// > _Note: `readline()` works in CLI mode._
/*  
?php
$name = readline("Enter your name: ");
echo "Hello, $name!\n";
?>
Would run this script in terminal, not through a browser.
In summary:
CLI mode is when you execute PHP scripts from 
the command line instead of accessing them through 
a web server and browser.
*/

## 4. `foreach` Loop
// Used to loop through each key/value pair in an array.

// **Example 1: Print array values**
$colors = ["red", "green", "blue"];
foreach ($colors as $color) {
    echo "$color <br>";
}

// **Example 2: Print key-value pairs**
$person = ["name" => "John", "age" => 30];
foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}


## 5. `match` Expression (PHP 8+)
// can be used as a looping or control structure,
// especially for handling multiple cases, conditions.

// **Example 1: Day of the week**
$day = 3;
$result = match ($day) {
    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",
    default => "Weekend",
};
echo $result; // Outputs: Wednesday

// **Example 2: Grading system**
$score = 85;
$grade = match (true) {
    $score >= 90 => "A",
    $score >= 80 => "B",
    $score >= 70 => "C",
    $score >= 60 => "D",
    default => "F",
};
echo $grade; // Outputs: B


echo '<br><hr>';

echo '</pre>';