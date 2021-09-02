<?php

require('db_config.php');

$sql = "CREATE TABLE `js_libraries` (

  `id` int(11) NOT NULL AUTO_INCREMENT,

  `choice` tinyint(4) NOT NULL DEFAULT '0',

  `ts` timestamp NULL DEFAULT NULL,

  PRIMARY KEY (`id`)
)";


if ($conn->query($sql) === TRUE) {
  echo "Table js_libraries created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();

?>