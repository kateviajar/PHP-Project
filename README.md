# PHP Project - CRUD operations in PHP
## Project Introduction
Create basic webpages to perform CRUD operations in PHP.  
It used PHP, HTML, Bootstrap, MySQL

## Project Structures
### project-part1.sql file
- Database name: project01
- Table name: super
- Fields of table: first_name, last_name, date_of_birth, alias, active, hero, created_at, updated_at

### _connect.php file
Using PDO to create a connection to MySQL DB.  
Also, using try catch to get the PDOException, then echo the errors

### _header.php and _footer.php files
Creating basic HTML header part and using Bootstrap for styling.  
Creating basic closing HTML in footer.  

### index.php file
1. Include the connection created.
2. Retrive all the rows from the database and display each row in the table.
3. Each row has edit and delete actions to be executed.
4. Include header and footer.
5. Add a navigation bar for home.php and new.php.

### new.php file
1. Include hearder and footer for this creating new data page.
2. Create a form with 5 fields for users to input.

### insert.php file
1. Include logic to insert the new 'super' row into the database.  
2. Adding validation for empty fields and show the alert popup window to users.
3. If the insert is failed, direct users to notification.php page.

### notification.php file
This page will show error message to users. If there is no any errors, users will be redirected to Home page (index.php)

### edit.php file
Retrieve the 'super' row selected from the database, and display the valuse on the form for users to edit.

### update.php
Update the existing 'super' row in the database. If the update is failed, direct users to notification.php page.

### delete.php file
Delete existing 'super' row from the database. If the delete is failed, direct users to notification.php page.

### Link
https://lamp.computerstudi.es/~PaoHua200453641/PHPProject/
