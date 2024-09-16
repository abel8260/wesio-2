<?php
// Start a new session or resume the existing session to track user data
session_start(); 

// Include the database connection file, which contains the code to connect to the database
include('../src/db/conexao.php');

/* 
Block Comment:
Form Validation:
This section checks if the required 'title' and 'conteudo' fields from the POST request are empty. 
If either of them is empty, the user is redirected to the 'profileREPO.php' page, and the script 
is terminated to prevent further execution.
*/


// Check if the 'title' or 'conteudo' fields are empty, preventing further actions if they are
if(empty($_POST['title']) || empty($_POST['conteudo'])){
	// Redirect the user to 'profileREPO.php' if the form fields are not filled in
	header('location:profileREPO.php'); 
	// Exit the script to ensure no further code is executed after the redirect
	exit();
}

/* 
Block Comment:
Session and Form Data Retrieval:
This section retrieves the current user's session data ('usuario') and assigns the input from the 
form fields 'title' and 'conteudo' into variables '$data2' and '$data3', respectively. 
These values will be inserted into the database.
*/

// Assign the value of the 'usuario' session variable to the '$userr' variable
$userr = $_SESSION['usuario'];

// Store the value from the 'title' field of the form submission into '$data2'
$data2 = $_POST['title'];

// Store the value from the 'conteudo' field of the form submission into '$data3'
$data3 =  $_POST['conteudo'];


/* 
Block Comment:
SQL Statement Preparation and Data Binding:
This block prepares an SQL INSERT query to store the form data into the 'repo_0w' table. The 'id_0w' 
column will auto-increment. The 'title' and 'conteudo' from the form, and a default value of 0 for 
'repo_invest', will be inserted. PDO's 'bindParam' method binds the values securely, preventing SQL injection.
*/


// Prepare an SQL INSERT query to insert the data into the 'repo_0w' table, setting 'id_0w' to NULL (auto-increment)
$sth = $pdo->prepare('INSERT INTO repo_0w(id_0w, repo_name, repo_msg, repo_invest ) VALUES (NULL, ?, ?, ?)');

// Assign a default value of 0 to '$data4', which will be inserted into the 'repo_invest' field
$data4 = 0;

// Bind the 'title' value from the form to the first placeholder in the SQL query (maximum 500 characters)
$sth->bindParam(1, $data2, PDO::PARAM_STR, 500);

// Bind the 'conteudo' value from the form to the second placeholder in the SQL query (maximum 500 characters)
$sth->bindParam(2, $data3, PDO::PARAM_STR, 500);

// Bind the '$data4' value (which is 0) to the third placeholder in the SQL query, specifying it as an integer
$sth->bindParam(3, $data4, PDO::PARAM_INT, 11);

// Execute the prepared SQL statement to insert the values into the database
$sth->execute();


/* 
Block Comment:
Termination and Optional Redirection:
After the data insertion, this block could redirect the user to another page (commented out here). 
The 'exit()' function ensures that no further code is executed after the database operation completes.
*/


// This line would redirect the user to another page after successful data insertion (commented out here)
header('location: ../profile/home/');

// Exit the script to prevent any further execution
exit();  

?>
