<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require_once("_connect.php");

  // Step 2: (20 points) Update the existing 'supers' row in the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "UPDATE supers SET
    first_name = :first_name,
    last_name = :last_name,
    date_of_birth = :date_of_birth,
    alias = :alias,
    active = :active,
    hero = :hero
  WHERE id = :id";

  $stmt = dbo()->prepare($sql);
  $stmt->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);
  $stmt->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR);
  $stmt->bindParam(':date_of_birth', $_POST['date_of_birth']);
  $stmt->bindParam(':alias', $_POST['alias'], PDO::PARAM_STR);
  $stmt->bindParam(':active', $_POST['active'], PDO::PARAM_STR);
  $stmt->bindParam(':hero', $_POST['hero'], PDO::PARAM_STR);
  $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);
  $stmt->execute();

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();
  if($stmt->errorCode() !== "00000"){
    $_SESSION["message"] = "There was an issue updating the row.";
    var_dump($stmt->errorInfo());
  }else{
    $_SESSION["message"] = "The row was updated successfully.";
  }

  header("Location: notification.php");
  exit();


  // TOTAL POINTS POSSIBLE: 38
?>