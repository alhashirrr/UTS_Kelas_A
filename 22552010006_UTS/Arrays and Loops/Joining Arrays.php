<?php

//Joining Arrays
//Rahmi Syafitri
//2255201006
//kelas A
namespace Codecademy;

$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];

$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];

$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

// Write your code below:
$potluck = $giraffe_foods + $impala_foods;

print_r($potluck);

$rat_impala = $rat_foods + $impala_foods;

print_r($rat_impala);

$everybody =  $giraffe_foods + $impala_foods + $rat_foods;

print_r($everybody);

?>