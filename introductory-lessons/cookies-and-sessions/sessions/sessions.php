<?php

// SESSION
// A session is a global variable stored on the server.
// Each session is assigned a unique id which is used to
// retrieve stored values.
// Sessions have the capacity to store relatively 
// large data compared to cookies
// The session values are automatically deleted when the
// browser is closed

session_start(); //start the PHP_session function 

if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
 echo 'You are visitor number ' . $_SESSION['page_count'];
?>