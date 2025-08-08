<?php

$trecias = 10;

// $trecias++;
// $trecias--;
// ++$trecias;
// --$trecias;
//  <br> <pre></pre>

print_r($trecias);

$pirmas = 'bla bla';
$antras = 'ku kū';
echo $pirmas, $antras;
echo '<br>';
print $pirmas;

/*
Example: Output (Unsafe)

$userInput = '<script>alert("Hacked!")</script>';
echo "<pre>$userInput</pre>";

Result: The browser sees the <script> tag and executes the JavaScript—this is 
a security risk (XSS)!

Example: Output with Escaping (Safe)

$userInput = '<script>alert("Hacked!")</script>';
echo "<pre>" . htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8') . "</pre>"


<!-- Good: Safe output -->
<div><?php echo htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8'); ?></div>
<pre><?php echo htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8'); ?></pre>

<!-- Bad: Unsafe output -->
<div><?php echo $userInput; ?></div>
<pre><?php echo $userInput; ?></pre>
*/

// Example 1: Check if a variable is set
$is_set = false;
$name = "Alice";
if (!empty($name)) {
    $is_set = true;
}
if ($is_set) {
    echo "Name is set!";
} else {
    echo "Name is not set.";
}

// Example 2: Form input presence check
$is_set = false;
if (isset($_POST['email'])) {
    $is_set = true;
    $email = $_POST['email'];
}
if ($is_set) {
    echo "Email received: " . htmlspecialchars($email);
} else {
    echo "No email submitted.";
}

// Example 3: Using is_set as a flag in a loop
$numbers = [1, 2, 3, 4, 5];
$is_set = false;
foreach ($numbers as $num) {
    if ($num == 3) {
        $is_set = true;
        break;
    }
}
if ($is_set) {
    echo "Number 3 is in the list!";
} else {
    echo "Number 3 is not found.";
}

// Example 4: Toggle is_set based on user choice
$is_set = false;
$choice = "yes"; // This could come from a form/input
if ($choice == "yes") {
    $is_set = true;
}
echo $is_set ? "You chose YES!" : "You did not choose YES.";

// Example 5: Use is_set to display a message after setting a value
$is_set = false;
$favorite_color = "";
if (isset($_GET['color'])) {
    $favorite_color = $_GET['color'];
    $is_set = true;
}
if ($is_set) {
    echo "Your favorite color is: " . htmlspecialchars($favorite_color);
} else {
    echo "Please select your favorite color.";
}

// 0123 (Octal Literal)
// 64+16+3=83 // 1 * 8(2); 2 * 8(1); 3 * 8(0).
$a = 0123; // $a is 83 in decimal

// 0x1A (Hexadecimal Literal)
$b = 0x1A; // $b is 26 in decimal

Example:


$number = 12.34567;
$formatted = number_format($number, 2); // "12.35"
echo $formatted;

// The second argument (2) specifies the number of decimal places.
// If you want the value as a float (not a string), you can do:

$number = 12.34567;
$rounded = round($number, 2); // 12.35
echo $rounded;

// number_format() returns a string (good for display).
// round() returns a float (good for calculations).

// Summary:
// For display: number_format($number, 2);
// For calculation: round($number, 2);

/*

Float: 
Stores numbers that can have a fractional part (e.g., 3.

Integer: 
Stores whole numbers (e.g., -3, 0, 42) without any fractional 
or decimal component.14, -0.001), using a specific binary format that 
can represent very large or very small numbers, including fractions.

*/

/*
print	Output text	Always 1 (integer)	print "Hello";

print "Hello";  // Outputs Hello, returns 1 (but this 1 is not "true/false")


isset	Check variable	true or false	isset($a)

$a = "something";
if (isset($a)) {
    // This runs, because $a exists and is not null
}

In short:
print outputs data and always returns 1 (which is always "truthy" but not informative).
isset checks if a variable exists and returns a boolean.
*/

if (print "Hello, world!") {
    // This block always runs, because print returns 1 (which is truthy)
    echo " - Output was printed!";
}

$result = print "Output this text."; // $result will be 1 after printing
echo " The value returned by print is: $result";

$status = (print "Printing...") ? "Success" : "Failure";
echo " Status: $status"; // Always prints "Status: Success"
/* ------------------------------------------------------------------- */
// Use >= or <= when you just want to check one condition.
// Use <=> when you need to sort things, compare many pairs, or want a single answer for all three conditions.

$a = 5;
$b = 7;

$result = $a <=> $b; // $result is -1 (because 5 is less than 7)



function bubbleSort(array &$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] <=> $arr[$j + 1] > 0) {
                // Swap if the left item is bigger than the right
                [$arr[$j], $arr[$j + 1]] = [$arr[$j + 1], $arr[$j]];
            }
        }
    }
}

$numbers = [5, 2, 9, 1, 6];
bubbleSort($numbers);
print_r($numbers); // Output: [1, 2, 5, 6, 9]


function selectionSort(array &$arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        $minIndex = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($arr[$j] <=> $arr[$minIndex] < 0) {
                $minIndex = $j;
            }
        }
        if ($minIndex !== $i) {
            [$arr[$i], $arr[$minIndex]] = [$arr[$minIndex], $arr[$i]];
        }
    }
}

$numbers = [5, 2, 9, 1, 6];
selectionSort($numbers);
print_r($numbers); // Output: [1, 2, 5, 6, 9]



$numbers = [5, 2, 9, 1, 6];

usort($numbers, function($a, $b) {
    return $a <=> $b;
});

print_r($numbers); // Output: [1, 2, 5, 6, 9]


/* ------------------------------------------------------------------- */

//Kelių lygių sąlyga
$drambliai = 3;
$raganosiai = 2;
if ($drambliai > $raganosiai) echo 'Dramblių yra daugiau';
elseif ($drambliai < $raganosiai) echo 'Raganosių yra daugiau';
else echo 'Raganosių ir dramblių yra vienodai';

/* ------------------------------------------------------------------- */
// Sąlyga gali būti sudėtinė

//Sudėtinė sąlyga
$drambliai = 3;
$raganosiai = 2;
$begemotai = 6;
if ($begemotai > $raganosiai && $begemotai > $drambliai) 
    echo 'Begemotų yra daugiausiai';

// Sąlyga gali būti užrašyta kaip priskiriamoji

//Priskiriamoji sąlyga
$vienas = 1;
$rezultatas = (1 == $vienas) ? 'Yes' : 'No'; // $rezultatas  yra 'Yes'
$rezultatas = (3 == $vienas) ? 'Yes' : 'No'; // $rezultatas  yra 'No'
// tas pats su if
if (1 == $vienas) $rezultatas = 'Yes';
else $rezultatas = 'No';

/* ------------------------------------------------------------------- */

// KINTAMOJO EGZISTAVIMO TIKRINIMAS

// Norint patikrinti ar egzistuoja kintamasis ir jis nelygus null, 
// naudojama funkcija isset() kuri gražina TRUE arba FALSE

isset($i); // gražina FALSE
$i=1;
isset($i); // gražina TRUE
$i=null; 
isset($i); //gražina FALSE

/* ------------------------------------------------------------------- */


// Priskiriamasis kintamojo egzistavimo tikrinimas

$rezultatas = $vienas ?? 8;// gražina 8
$vienas = 1;
$rezultatas = $vienas ?? 8;// gražina 1

// 1. Simple variable with a default value
$name = $userName ?? 'Guest';
echo $name; // Outputs 'Guest' if $userName is not set

// 2. Handling possible missing array key
$color = $settings['themeColor'] ?? 'blue';
echo $color; // Outputs 'blue' if 'themeColor' key is not set

// 3. Using with $_GET superglobal
$page = $_GET['page'] ?? 1;
echo $page; // Outputs 1 if 'page' is not in the URL

// 4. Chaining multiple options
$selected = $input ?? $fallback ?? 'default';
echo $selected; // Uses $input if set, else $fallback, else 'default'

// 5. With object property
$title = $article->title ?? 'Untitled';
echo $title; // Outputs 'Untitled' if $article->title is null or not set

// 6. With $_POST form data
$email = $_POST['email'] ?? '';
echo $email; // Outputs empty string if 'email' is not set in POST data

// 7. Assigning session value with default
$userId = $_SESSION['user_id'] ?? 0;
echo $userId; // Outputs 0 if 'user_id' is not set in session





