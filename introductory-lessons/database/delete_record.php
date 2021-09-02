<?php 

  require('config.php');
  
  
	$id = 5;
	$sql_stmt = "DELETE FROM `my_personal_contacts` WHERE `id` = $id"; 
	//SQL Delete query 
    
	$result = mysqli_query($conn,$sql_stmt); 
	//execute SQL statement 
    
	if (!$result)
		die("Deleting record failed: " . mysqli_error());  

	//output error message if query execution failed 
    
	echo "ID number $id has been successfully deleted"; 
mysqli_close($conn); //close the database connection 
?>