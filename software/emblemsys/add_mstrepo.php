<?php
// Start the session to access session variables
session_start(); 

// Include the database connection file
include('../src/db/conexao.php');

/* 
Block Comment:
This section checks if the 'title' and 'conteudo' fields, which are required for the database insert operation, 
have been filled out. If any of these fields are empty, the user will be redirected back to the profile page, 
and the script will stop further execution.
*/

// Check if the 'title' or 'conteudo' fields from the POST request are empty
if(empty($_POST['title']) || empty($_POST['conteudo'])){
	// If either is empty, redirect back to the profile page and stop the script
	header('location:profileREPO.php'); 
	exit();
}

/*
Block Comment:
The following section retrieves the current user's session information and the submitted data from 
the form. The session variable 'usuario' stores the logged-in user's details, and the POST data 
retrieves the title and content for the repository profile to be inserted into the database.
*/
// Retrieve the session variable 'usuario' (assumed to be the current user)
$userr = $_SESSION['usuario'];

// Get the 'title' from the POST request
$data2 = $_POST['title'];

// Get the 'conteudo' from the POST request
$data3 = $_POST['conteudo'];


/*
Block Comment:
This block prepares and executes the SQL statement to insert the form data into the 'mst_repo_profile4' table. 
The 'id' is auto-incremented, so it is set to NULL. 'titulo' and 'conteudo' are the fields populated with the 
user input, and 'usuarioo' stores the current user session. PDO is used here to safely handle the input data 
to prevent SQL injection. The 'bindParam' method binds each input to the corresponding placeholder in the 
prepared statement before executing the insertion.
*/

// Prepare an SQL statement to insert the data into the 'mst_repo_profile4' table
$sth=$pdo->prepare('INSERT INTO mst_repo_profile4(id, titulo, conteudo, usuarioo) VALUES (NULL, ?, ?, ?)');

// Bind the 'title' value to the first parameter in the SQL statement (max length: 255 characters)
$sth->bindParam(1, $data2, PDO::PARAM_STR, 255);

// Bind the 'conteudo' value to the second parameter in the SQL statement (max length: 255 characters)
$sth->bindParam(2, $data3, PDO::PARAM_STR, 255);

// Bind the 'usuario' session value to the third parameter in the SQL statement (max length: 255 characters)
$sth->bindParam(3, $userr, PDO::PARAM_STR, 255);

// Execute the SQL statement to insert the data into the database
$sth->execute();

/*
Block Comment:
The code below is meant to redirect the user to another page (uncomment the 'header' line if needed) 
after successfully inserting the data into the database. Finally, the 'exit()' function is used to 
terminate the script execution immediately.
*/

// Deallocate to the profile
 header('location: ../profile/home/');

// End the script to prevent any further execution
exit();  
?>
