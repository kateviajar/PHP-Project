<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  require_once("_connect.php");
  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $sql = "SELECT * FROM supers";
  $rows = dbo()->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Step 3: (2 points) Include your header here -->
<?php include_once("_header.php"); ?>

<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
<nav class="nav">
  <ul class="nav">
    <li class="nav-item mx-5">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item mx-5">
      <a class="nav-link" href="new.php">New</a>
    </li>
  </ul>
</nav>

<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->

<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<table class="table table-striped my-3">
  <thead>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Date of Birth</th>
      <th>Alias</th>
      <th>Active</th>
      <th>Hero</th>
    </tr>
  </thead>

  <tbody>
    <!-- foreach loop -->
    <?php foreach($rows as $row): ?>
      <tr>
        <td><?= $row["first_name"] ?></td>
        <td><?= $row["last_name"] ?></td>
        <td><?= $row["date_of_birth"] ?></td>
        <td><?= $row["alias"] ?></td>
        <td><?= $row["active"] == '1'? "ON" : "OFF" ?></td>
        <td><?= $row["hero"] == '1'? "Yes" : "No" ?></td>
        <td>
          <a href="edit.php?id=<?= $row["id"] ?>">Edit</a>
          |
          <a href="delete.php?id=<?= $row["id"] ?>" onClick="return confirm('The record will be deleted! Are you sure?')">Delete</a>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<!-- Step 7: (2 points) Include your footer here -->
<?php include_once("_footer.php"); ?>


<!-- TOTAL POINTS POSSIBLE: 34 -->