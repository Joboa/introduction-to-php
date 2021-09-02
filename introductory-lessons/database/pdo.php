<?php 

// PDO 
// The PDO is a class that allows us to manipulate different 
// database engines such as MySQL, PostGres, MS SQL Server etc.
	try {    
	$pdo = new PDO("mysql:host=localhost;dbname=my_personal_contacts", 'root', '');     
    
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);     
	$pdo->exec('SET NAMES "utf8"');     
    
	$sql_stmt = "SELECT * FROM `my_personal_contacts`";     
	$result = $pdo->query($sql_stmt);     
	$result->setFetchMode(PDO::FETCH_ASSOC);     
	$data = array();     
	foreach ($result as $row) {         
	  $data[] = $row;     
  }    

  print_r($data); 
} 

catch (PDOException $e) {     
	echo $e->getMessage(); 
} 
?>