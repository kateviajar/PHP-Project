<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require("_connect.php");

  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $required_fields = [
    'first_name',
    'last_name',
    'date_of_birth'
  ];

  //Validating empty fields
  foreach($required_fields as $field){
    if(empty($_POST[$field])){
        echo '<script type ="text/JavaScript">';  
        echo "alert('The {$field} cannot be empty')"; 
        echo '</script>';
        exit;
    }
  }

  //SQL query for insert data
  $sql = "INSERT INTO supers (
      first_name,
      last_name,
      date_of_birth,
      alias,
      active,
      hero
  ) VALUES (
      :first_name,
      :last_name,
      :date_of_birth,
      :alias,
      :active,
      :hero
  )";

  $stmt = dbo()->prepare($sql);

  $stmt->bindParam(':first_name', $_POST['first_name'], PDO::PARAM_STR);
  $stmt->bindParam(':last_name', $_POST['last_name'], PDO::PARAM_STR);
  $stmt->bindParam(':date_of_birth', $_POST['date_of_birth']);
  $stmt->bindParam(':alias', $_POST['alias'], PDO::PARAM_STR);
  $stmt->bindParam(':active', $_POST['active']);
  $stmt->bindParam(':hero', $_POST['hero']);

  $stmt->execute();

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  session_start();
  if($stmt->errorCode() !== "00000"){
    $_SESSION["message"] = "There was an issue inserting the row.";
    var_dump($stmt->errorInfo());
  }else{
    $_SESSION["message"] = "The row was inserted successfully.";
  }

  header("Location: notification.php");
  exit();

  // TOTAL POINTS POSSIBLE: 35
?>