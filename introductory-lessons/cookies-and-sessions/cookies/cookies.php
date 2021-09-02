<?php

// COOKIES
// A cookie is a small file with the maximum size of 4kb that a
// web server stores on the client computer
// Once a cookie has been set, all page requests 
// that follow return the cookie name and value.
// cookies allow us to track the state of the application

// setcookie(cookie_name, cookie_value, [expiry_time], 
//   [cookie_path], [domain], [secure], [httponly]);

/**
 * A program that store the user name in a 
 * cookie that expires after 60 seconds
 * @access public
 * @return cookies
 * 
 */

 setcookie("user_name", "Joboa21", time() + 60, '/');
 echo 'the cookie has been set for 60 seconds';

?>