<?php

// mysqli_connect function
// The PHP mysql connect function is used to connect to a MySQL 
// database server.
$db_handle = mysqli_connect(
  $db_server_name, $db_user_name, $db_password);

// mysqli_select_db function
// The mysqli_select_db function is used to select a database.
mysqli_select_db($db_handle,$database_name);

// mysqli_query function
// The mysqli_query function is used to execute SQL queries.
mysqli_query($db_handle,$query) ;

// mysqli_num_rows function
// The mysqli_num_rows function is used to get the number of rows returned 
// from a select query.
mysqli_num_rows($result);


// mysqli_fetch_array
// The mysqli_fetch_array function is used fetch row arrays from a 
// query result set.
mysqli_fetch_array($result);

// The mysqli_close function is used to close an open 
// database connection.
mysqli_close($db_handle);
?>