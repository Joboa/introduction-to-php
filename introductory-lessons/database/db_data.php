<?php

require('config.php');

$sql = "INSERT INTO `my_personal_contacts` (`id`, `full_names`, `gender`, `contact_no`, `email`, `city`, `country`) VALUES

(1, 'Zeus', 'Male', '111', 'zeus@olympus.mt.co', 'Agos', 'Greece'),

(2, 'Anthena', 'Female', '123', 'anthena@olympus.mt . co', 'Athens', 'Greece'),

(3, 'Jupiter', 'Male', '783', 'jupiter@planet.pt.co', 'Rome', 'Italy'),

(4, 'Venus', 'Female', '987', 'venus@planet.pt.co', 'Mars', 'Italy')";

if (mysqli_query($conn, $sql)) {
  echo "New contact record created successfully";
} else {
  echo "Error: " . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>