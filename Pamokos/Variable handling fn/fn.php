<?php

// unset()
// Destroys the specified variables.
// If a globalized variable is unset() inside of a function, 
// only the local variable is destroyed.

// destroy a single variable
unset($foo);

// destroy a single element of an array
unset($bar['quux']);

// destroy more than one variable
unset($foo1, $foo2, $foo3);

function destroy_foo() 
{
    global $foo;
    unset($foo);
}

$foo = 'bar';
destroy_foo();
echo $foo;