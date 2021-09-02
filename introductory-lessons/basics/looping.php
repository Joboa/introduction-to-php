<?php

// FOR LOOP

echo "FOR LOOP <br/> <br/>";
for ($i = 0; $i < 10; $i++){
  $product = 10 * $i;

  echo "The product of 10*$i is $product <br/>";
}
echo "<br/>";

// FOR EACH

echo "FOR EACH <br/>";
$animals_list = array(
  "Lion", "Wolf", "Dog", "Leopard", "Tiger"
);

foreach($animals_list as $array_values) {
  echo $array_values . "<br>";
}
echo "<br/>";


echo "FOR EACH IN ASSOCIATIVE ARRAY <br/> <br/>";
$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

foreach($persons as $key => $value){

echo "$key is $value"."<br>";
}
echo "<br/>";

// WHILE LOOP
echo "WHILE LOOP <br/>";
$i = 0;
while ($i < 5) {
  echo $i + 1 . "<br>";
  $i++;
}
echo "<br/>";


// DO WHILE LOOP
echo "DO WHILE LOOP <br/>";
$i = 9;
do {
  echo "$i is". "<br>";
} while ($i < 5);
?>