<!-- Step 1: (2 points) Include your header here -->
<?php include_once("_header.php"); ?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<a class="nav-link my-3 mx-3" href="index.php">Home</a>

<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<div class="container mx-3">
    <form action="insert.php" method="post">
        <div class="form-group">
            <label>First Name:</label>
            <input class="form-control" type="text" name="first_name" required>
        </div>

        <div class="form-group">
            <label>Last Name:</label>
            <input class="form-control" type="text" name="last_name" required>
        </div>

        <div class="form-group">
            <label>Date of Birth:</label>
            <input class="form-control" type="date" name="date_of_birth" placeholder="YYYY-MM-DD" required>
        </div>

        <div class="form-group">
            <label>Alias:</label>
            <input class="form-control" type="text" name="alias">
        </div>

        <div class="form-check mb-2">
            <!-- if checkbox is checked, it passes value 1 to database, which means "Active is ON". If not, it passes value 0. -->
            <input class="form-check-input" type="hidden" name="active" value="0">
            <input class="form-check-input" type="checkbox" name="active" value="1">
            <label class="form-check-label" for="active">Active</label>
        </div>

        <div class="form-check mb-2">
            <!-- if checkbox is checked, it passes value 1 to database, which means "Hero is Yes". If not, it passes value 0. -->
            <input class="form-check-input" type="hidden" name="hero" value="0">
            <input class="form-check-input" type="checkbox" name="hero" value="1">
            <label class="form-check-label" for="hero">Hero</label>
        </div>

        <button class="btn btn-primary" type="submit">Create</button>
    </form>
</div>

<!-- Step 5: (2 points) Include your footer here -->
<?php include_once("_footer.php"); ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->