<?php 
	
  require('config.php');
    
    
	$sql_stmt = "INSERT INTO `my_personal_contacts` (`full_names`,`gender`,`contact_no`,`email`,`city`,`country`)"; 
	$sql_stmt .= " VALUES('Poseidon','Mail','541',' poseidon@sea.oc','Troy','Ithaca')"; 
    
	$result = mysqli_query($conn,$sql_stmt); //execute SQL statement 
    
	if (!$result)     
		die("Adding record failed: " . mysqli_error()); 
		//output error message if query execution failed echo "Poseidon has been successfully added to your contacts list";
        
 mysqli_close($conn); //close the database connection 
?>