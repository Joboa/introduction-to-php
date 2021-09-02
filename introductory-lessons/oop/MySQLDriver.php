<?php

/**
 * class that will extend the DBCommonMethods class and 
 * extend the DBInterface interface.
 */

 class MySQLDriver extends DBCommonMethods implements DBInterface
 {
   public function __construct($host, $db, $uid, $password) 
   {
     parent::__construct($host, $db, $uid, $password);
   }

   public function db_connect() 
   {
      //connect code goes here 
   }

   
   public function delete($where) 
   {
      //delete code goes here 
   }

   public function insert($where) 
   {
      //insert code goes here 
   }

   public function read($where) 
   {
      //read code goes here 
   }

   public function update($where) 
   {
      //update code goes here 
   }
 }

 //Usage
 $db = new MySQLDriver($host,$db,$uid,$password);
?>