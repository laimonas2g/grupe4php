<?php

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/

for ($x = 0; $x <= 10; $x++) {
  echo "Number: $x <br>";
}

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$x = 1;

while ($x <= 5) {
  echo "Number: $x <br>";
  $x++;
}

// Reading a File Line by Line (while)
// Reading from a file until end-of-file. 
// If the file is empty, you don’t want to execute the code.
while ($input !== 'exit') {
    // Keep asking user for input until they type 'exit'
    $input = readline("Type something (or 'exit' to quit): ");
}

// Database Pagination (while)
// Fetch and process database records in chunks until 
// there are no more:
function fetchRowsFromDb($offset, $limit) {
    // placeholder function that returns sample rows.
    return [
        ['id' => 1, 'name' => 'Alice'],
        ['id' => 2, 'name' => 'Bob']
    ];
}

$offset = 0;
$limit = 100;
while (true) {
    $rows = fetchRowsFromDb($offset, $limit);
    if (empty($rows)) break;
    foreach ($rows as $row) {
        // process $row
    }
    $offset += $limit;
}
// Waiting for External Resource (while)
// Keep checking if a file exists until it appears (with a timeout):

$wait = 0;
while (!file_exists('ready.flag') && $wait < 10) {
    sleep(1);
    $wait++;
}
if (file_exists('ready.flag')) {
    echo "File is ready!";
} else {
    echo "Timeout waiting for file.";
}    
// Why while? May not wait at all if file exists; otherwise, 
// loops until file appears or timeout.

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block 
of code once, even if the condition is false.
*/

do {
  echo "Number: $x <br>";
  $x++;
} while ($x <= 5);

// Showing a menu at least one time, even if the user 
// chooses to exit immediately.
do {
    $choice = readline("Choose (1) Continue, (2) Exit: ");
} while ($choice != '2');

// User Input Validation (do...while)
// Prompt a user at least once, and repeat until 
// valid input is given:
do {
    $age = readline("Enter your age: ");
} while (!is_numeric($age) || $age < 1);
echo "Your age is $age";

// Menu Loop (do...while)
// Present a menu that should be shown at least once 
// and repeat until user exits:
do {
    echo "(1) Say Hello\n(2) Exit\n";
    $choice = readline("Choose: ");
    if ($choice == 1) echo "Hello!\n";
} while ($choice != 2);

/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// Loop through an array

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $x) {
  echo "Number: $x <br>";
}

// Use the indexes within the loop

$posts = ['Post One', 'Post Two', 'Post Three'];

foreach ($posts as $index => $post) {
  echo "$index - $post <br>";
}

// Use the keys within the loop for an associative array

$person = [
  'first_name' => 'Brad',
  'last_name' => 'Traversy',
  'email' => 'brad@gmail.com',
];

// Get Keys
foreach ($person as $key => $val) {
  echo "$key - $val <br>";
}