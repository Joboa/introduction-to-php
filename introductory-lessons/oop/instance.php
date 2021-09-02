<?php

/**
 * CREATING AN INSTANCE (objects) FROM THE CLASSES
 */

 require('Animal.php');
 require 'Cow.php';
 require 'Lion.php';

 $animal = new Animal("Dog", "Bread");
 $cow = new Cow("Herbivore", "Grass");
 $lion = new Lion('Carnival', 'Meat');

 echo "<b>Animal</b> <br>";
 echo $animal->get_family();
 echo "<br> <br>";
 echo $animal->get_food();
 echo "<br> <br>";

 echo "<b>Cow</b> <br>";
 echo $cow->get_family();
 echo "<br> <br>";
 echo $cow->get_food();
 echo "<br> <br>";

 echo "<b>Lion</b> <br>";
 echo $lion->get_family();
 echo "<br> <br>";
 echo $lion->get_food();
 echo "<br> <br>";

?>