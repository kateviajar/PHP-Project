<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require_once("_connect.php");

  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "SELECT * FROM supers WHERE id = :id";
  $stmt = dbo()->prepare($sql);
  $stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include_once("_header.php"); ?>

<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a class="nav-link my-3 mx-3" href="index.php">Home</a>

<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<div class="container mx-3">
  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $row["id"] ?>">
        
    <div class="form-group">
      <label>First Name:</label>
      <input class="form-control" type="text" name="first_name" value="<?= $row["first_name"] ?>">
    </div>

    <div class="form-group">
      <label>Last Name:</label>
      <input class="form-control" type="text" name="last_name" value="<?= $row["last_name"] ?>">
    </div>

    <div class="form-group">
      <label>Date of Birth:</label>
      <input class="form-control" type="text" name="date_of_birth" value="<?= $row["date_of_birth"] ?>">
    </div>

    <div class="form-group">
      <label>Alias:</label>
      <input class="form-control" type="text" name="alias" value="<?= $row["alias"] ?>">
    </div>

    <div class="form-check mb-2">
        <input class="form-check-input" type="hidden" name="active" value="0">
        <!-- Get the "active" data from database, if it's 1, then pre-checked the checkbox -->
        <input class="form-check-input" type="checkbox" name="active" value="1" <?= $row["active"] == '1'? " checked" : null ?>>
        <label class="form-check-label" for="active">Active</label>
    </div>

    <div class="form-check mb-2">
        <input class="form-check-input" type="hidden" name="hero" value="0">
        <!-- Get the "hero" data from database, if it's 1, then pre-checked the checkbox -->
        <input class="form-check-input" type="checkbox" name="hero" value="1" <?= $row["hero"] == '1'? " checked" : null ?>>
        <label class="form-check-label" for="hero">Hero</label>
    </div>

    <button class="btn btn-primary" type="submit">Update</button>
  </form>
</div>

<!-- Step 8: (2 points) Include your footer here -->
<?php include_once("_footer.php"); ?>


<!-- TOTAL POINTS POSSIBLE: 44 -->