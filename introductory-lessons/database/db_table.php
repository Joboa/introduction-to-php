<?php

require('config.php');

$sql = "CREATE TABLE IF NOT EXISTS `my_personal_contacts` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `full_names` varchar(255) NOT NULL,

  `gender` varchar(6) NOT NULL,

  `contact_no` varchar(75) NOT NULL,

  `email` varchar(255) NOT NULL,

  `city` varchar(255) NOT NULL,

  `country` varchar(255) NOT NULL,

  PRIMARY KEY (`id`)

)";

if ($conn->query($sql) === TRUE) {
  echo "Table my_personal_contacts created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>