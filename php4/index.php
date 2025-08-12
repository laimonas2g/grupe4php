<?php
declare(strict_types=1);

echo '<hr>';

function fun1()
{
    return '<h2>Have FUN</h2>';
}

if (!function_exists('fun2')) {
    function fun1()
    {
        return '<h2>Have FUN222</h2>';
    }
}



echo fun1();

$a = 'Have';
$b = 'Racoon';

function fun2($one, $two)
{
    return "<h2>$one $two</h2>";
}

echo fun2($a, $b);

function fun3($one, $two = 10)
{
    return '<h2>' . $one + $two . '</h2>';
}

echo fun3(1);

function vidurkis(...$skaiciai) 
{
    $sudetis = 0;
    foreach ($skaiciai as $val) {
        $sudetis += $val;
    }
    $vidurkis = $sudetis / count($skaiciai);
    return $vidurkis;
}

echo vidurkis(5, 7, 7, 7);

$super = 'SUPER';

function fun4()
{
    global $super; // labai bloga praktika- senoviska architektura

    return "<h2>$super!</h2>";
}

echo fun4();



$digit = 10;

function fun5(&$d) // perdavimas by reference
{
     $d++;
}

fun5($digit);

echo "<h2>$digit!</h2>";

function fun6()
{
    static $index = 0;
    $index++;
    echo "$index<br>";

}

fun6();
fun6();
fun6();

function recursive($num)
{
     echo $num, 'IN<br>';
     if ($num < 3) {
         recursive($num + 1);
     }
     echo $num, 'OUT<br>';
}

$startNum = 1;
recursive($startNum);

$fancy5 = [
    1,
    5,
    [
        1,
            [
            1,
            [
                5,
                1
            ],
        ],
        1
    ],
    1,
    [
        5,
            [
                1,
                [
                    1,
                    5
                ],
            ],
        5
    ],
    1
];
 
echo '<pre>';
print_r($fancy5);

function countFives($array) {
    $count = 0;
    foreach ($array as $item) {
        if (is_array($item)) {
            $count += countFives($item);
        } elseif ($item === 5) {
            $count++;
        }
    }
    return $count;
}
 
echo "Count of 5: " . countFives($fancy5);

$greet = function($name)
{
    return "<h3>Hello, $name</h3>";
};
$greet = function($name)
{
    return "<h3>Bye Bye, $name</h3>";
};

echo $greet('Bebrai');
echo $greet('Barsukai');

$masyvas = [
    ['bebras','kietas'],
    ['zuikis','trumpas'],
    ['vilkas','pilkas'],
    ['dramblys','storas'],
];

function sort7($a, $b)
{
   return $a[0] <=> $b[0];
};

$sort7 = function($a, $b)
{
   return $a[0] <=> $b[0];
};

$pagal = 1;

usort($masyvas, function($a, $b) use ($pagal) {
    return $a[$pagal] <=> $b[$pagal];
});

print_r($masyvas);

// arrow function
usort($masyvas, fn($a, $b) => $a[$pagal] <=> $b[$pagal]); // tik vienai eilute "$pagal" matomas




print_r($masyvas);

echo '<hr>';


function fun10(int|string $kas) : int
{
    return $kas + 7;
}

var_dump(fun10(5));
