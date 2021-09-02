<?php 

  require('config.php');
  
    
	$sql_stmt = "UPDATE `my_personal_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'"; //SQL select query 
	$sql_stmt .= " WHERE `id` = 5"; 
    
	$result = mysqli_query($conn,$sql_stmt); 
	//execute SQL statement if (!$result)     
	if (!$result)     
		die("Updating record failed: " . mysqli_error()); 
    
	// die("Updating record failed: " . mysqli_error()); 
	//output error message if query execution failed 
    
	echo "ID number 5 has been successfully updated"; 
	mysqli_close($conn); //close the database connection 
?>