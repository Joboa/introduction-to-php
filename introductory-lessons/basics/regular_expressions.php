<?php

// preg_split
$my_url = "www.joboadevs.com";
if (preg_match("/joboadevs/", $my_url))
{
	echo "the url $my_url contains joboadevs";
}
else
{
	echo "the url $my_url does not contain joboadevs";
}

echo "<br>";
echo "<br>";


// preg_split
$my_text="I Love Regular Expressions";

$my_array  = preg_split("/ /", $my_text);

print_r($my_array );


// preg_replace
$text = "We at Joboadevs strive to make quality education affordable to the masses. Joboadevs.com";

$text = preg_replace("/Joboadevs/", '<span style="background:yellow">Joboadevs</span>', $text);

echo $text;


echo "<br>";
echo "<br>";
$my_email = "name@company.com";
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/", $my_email)) {
echo "$my_email is a valid email address";
}
else
{
  echo "$my_email is NOT a valid email address";
}

?>