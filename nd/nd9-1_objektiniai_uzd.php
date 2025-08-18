<?php

/* 
Objektiniai uždaviniai 
// Example 1: Basic class with constructor
class User {
    public $name;
    public function __construct($name) {
        $this->name = $name;
    }
}

// Example 2: Class with multiple constructor arguments
class Product {
    public $id;
    public $title;
    public function __construct($id, $title) {
        $this->id = $id;
        $this->title = $title;
    }
}

// Example 3: Constructor with default value
class Car {
    public $brand;
    public function __construct($brand = "Toyota") {
        $this->brand = $brand;
    }
}

// Example 4: Constructor initializing an array property
class Order {
    public $items;
    public function __construct($items = []) {
        $this->items = $items;
    }
}

// Example 5: Constructor using type hints
class Customer {
    public string $email;
    public function __construct(string $email) {
        $this->email = $email;
    }
}
*/

/* 1. Create a class called Counter. 
Create a private property $value (starts at 0).
Write methods increment(), decrement(), and getValue().
Demonstrate the counter by creating an object, incrementing and decrementing, 
and displaying the value. */



/* 2. Create a class called Wallet.
Create two private properties: $coins (integer value) and $notes (integer value).
Write a method insert($amount), which adds to coins if $amount <= 5, otherwise adds to notes.
Write a method total(), which prints the sum of coins and notes.
Demonstrate the class by inserting different amounts and printing the totals. */



/* 3. (STATIC) Create a class called Box.
Add a static private property $totalItems (counts total across all objects).
Each object has private property $items.
Method addItems($count) adds to both object and static property.
Create three objects, add items to each, and display individual and total counts. */



/* 4. (EXTENDS) Create a class called Animal with a method makeSound() that prints "Some sound".
Create a class Dog that extends Animal and overrides makeSound() to print "Woof".
Demonstrate both classes. */



/* 5. Create a class called Library.
Each library has a private property $books (array).
Method addBook($book) adds a string to the array.
Method countBooks() returns the number of books.
Demonstrate by adding books and displaying the count. */



/* 6. Create a class called Bottle. Private properties: $capacity, $current (starts at 0).
Method pourIn($amount) increases $current but cannot exceed $capacity.
Method pourOut() returns the current amount and resets $current to 0.
Demonstrate with two bottles of different capacities. */



/* 7. Create a class called Apple. 
Each apple has a property: $ripe (bool, random) and $weight (random between 100 and 200).
Create a class Basket with a constant SIZE of 1000, private $apples (array) and $weight (int).
Add apples to the basket only if they are ripe, until basket reaches or exceeds SIZE.
Display the total apples and weight. */



/* 8. Improve the Wallet class so you can count how many coins and notes are in the wallet.
Write methods coinCount() and noteCount() to return these counts. */



/* 9. (STATIC) Create a class called SolarSatellite.
Control object creation using a static method. Allow only three objects in total.
First object gets a private property $name = "Europa", second "Ganymede", third "Callisto".
Trying to create a fourth object should return one of the existing objects randomly. */



/* 10. (STATIC) Create a class TennisPlayer.
Private property $name, private property $ball (true if has, false otherwise).
Private static $player1, $player2 (to store object references).
Methods:
A. public hasBall();
B. public passBall() (pass ball to the other player);
C. public static startGame() (give ball to a random player).
Create two objects, neither has the ball. Call startGame(), give ball to one.
Use passBall() to pass ball between players. A player without the ball cannot pass. */



?>