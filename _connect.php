<?php

  // Step 1: (12) Using either MySQLi or PDO
  //    Create a connection to your MySQL DB and store it in a variable named $conn
  // CREATE YOUR CONNECTION BELOW THE LINE
  function dbo(){
    try{
      $dsn = 'mysql:host=localhost;dbname=project01';
      $username = 'root'; 
      $password = '';

      $conn = new PDO($dsn, $username, $password);

      //Report SQL errors
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      return $conn;

    }catch(PDOException $error){
      //echo the errors
      echo "<br>{$e->getCode()}: {$e->getMessage()}</br>";
      return false;
    }
  }
  
  // TOTAL POINTS POSSIBLE: 6

?>