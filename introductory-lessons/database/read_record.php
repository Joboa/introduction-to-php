<?php 

  require('config.php');  
    
	$sql_stmt = "SELECT * FROM my_personal_contacts"; 
    //SQL select query 
    
  $result = mysqli_query($conn, $sql_stmt);
     //execute SQL statement 
     
	if (!$result)     
		die("Database access failed: " . mysqli_error()); 
    	//output error message if query execution failed 
        
	$rows = mysqli_num_rows($result); 
   		// get number of rows returned 
    
	if ($rows) {     
    
	while ($row = mysqli_fetch_array($result)) {         
		echo 'ID: ' . $row['id'] . '<br>';         
		echo 'Full Names: ' . $row['full_names'] . '<br>';        
		echo 'Gender: ' . $row['gender'] . '<br>';         
		echo 'Contact No: ' . $row['contact_no'] . '<br>';         
		echo 'Email: ' . $row['email'] . '<br>';         
		echo 'City: ' . $row['city'] . '<br>';         
		echo 'Country: ' . $row['country'] . '<br><br>';     
	} 
} 
mysqli_close($conn); //close the database connection 
?>