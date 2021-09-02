<?php

// ARRARYS: 
// Arrays are special variables with the capacity to store multi 
// values.

// NUMERIC ARRAYS (Python List)

// $variable_name[n] = value;

// $variable_name = array(n => value)

$movie[0] = 'Shaolin Monk';
$movie[1] = 'Drunken Master';
$movie[2] = 'American Ninja';
$movie[3] = 'Once upon a time in China';
$movie[4] = 'Replacement Killers';

// echo $movie[3];

$movies = array (0 => "Shaolin Monk",
                1 => "Drunken Master",
                2 => "American Ninja",
                3 => "Once upon a times in China",
                4 =>"Replacement Killers" );

// echo $movies[4];


/**
 * ASSOCIATIVE ARRAYS (Python Dictionary)
 * Good for retrieving data from the database
 * @access public
 * @method: count, is_arrary, sort, ksort, asort
 */


// $variable_name['key_name'] = value;

// $variable_name = array('keyname' => value);

$persons = array("Mary" => "Female", "John" => "Male");
// echo "";
// echo "Mary is a " .$persons["Mary"];
sort($persons);
print_r($persons);


$movies =array(
  "comedy" => array("Pink Panther", "John English", "See no evil hear no evil"),
  "action" => array("Die Hard", "Expendables"),
  "epic" => array("The Lord of the rings"),
  "Romance" => array("Romeo and Juliet")
  );
  // print_r($movies);

  echo $movies["comedy"][1];
  // echo "--";
  // echo count($movies["comedy"])
  // echo is_array($movies["comedy"])

?>