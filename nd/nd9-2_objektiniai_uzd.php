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

/* 1. Create a class called Temperature.
Private property $celsius (starts at 0).
Methods: setCelsius($value), getFahrenheit(), getCelsius().
Demonstrate by setting different temperatures and displaying both units. */


/* 2. Create a class called BankAccount.
Private properties: $balance (float), $owner (string).
Methods: deposit($amount), withdraw($amount), getBalance().
Demonstrate depositing and withdrawing, including edge cases (e.g., overdraft attempt). */


/* 3. (STATIC) Create a class called CounterManager.
Static private property $totalCounters (starts at 0).
Every new CounterManager object increases the counter.
Methods: getTotalCounters().
Create several objects and display total counters. */


/* 4. (EXTENDS) Create a class Vehicle with method drive() that prints "Driving".
Create a class ElectricCar that extends Vehicle and overrides drive() to print "Driving silently".
Demonstrate both classes. */


/* 5. Create a class called MovieCollection.
Private property $movies (array).
Method addMovie($title, $year) adds associative array to $movies.
Method getMoviesByYear($year) returns all movies from that year.
Demonstrate by adding and querying movies. */


/* 6. Create a class called Safe.
Private properties: $capacity, $contents (array, starts empty).
Method addItem($item, $size) adds item if total size doesn't exceed $capacity.
Method getItems() returns current contents.
Show two safes with different capacities. */


/* 7. Create a class called Student.
Private properties: $name, $grades (array of ints).
Method addGrade($grade), method averageGrade().
Create a class called Classroom with property $students (array).
Add students and grades, display average grade for entire classroom. */


/* 8. Improve MovieCollection: add removeMovie($title) and countMovies() methods.
Demonstrate removing and counting movies. */


/* 9. (STATIC) Create a class called UniqueIDGenerator.
Static property $lastID (starts at 0).
Static method generateID() returns incremented integer ID.
Create several objects using IDs from generator, show IDs. */


/* 10. (STATIC & EXTENDS) Create a class GamePlayer.
Private property $name.
Static property $players (array of objects).
Method joinGame(), static method getPlayers().
Create a subclass VIPPlayer that extends GamePlayer and has method getVIPStatus().
Demonstrate joining game with both classes and listing all players. */


?>