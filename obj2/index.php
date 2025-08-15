<?php

require __DIR__ . '/Page.php';
require __DIR__ . '/Article.php';
require __DIR__ . '/Cart.php';


// $article1 = new Article('5 dalykai');
// $article2 = new Article('Didelis maisas su katem');
// $article3 = new Article();


echo '<pre>';

// var_dump($article1, $article2, $article3);

// echo $article2->url;

// echo Article::$score;
// echo '<br>';
// echo Page::$score;

$place1 = Cart::getCart();

$place1 ->add('Pienas');

$place2 = new Cart();

$place2 ->add('Sviestukas');

var_dump($place1, $place2);