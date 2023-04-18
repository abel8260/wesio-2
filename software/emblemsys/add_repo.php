<?php
session_start(); 
include('../src/db/conexao.php');



if(empty($_POST['title']) || empty($_POST['conteudo'])){
	header('location:profileREPO.php'); 
	exit();
}
$userr = $_SESSION['usuario']   ;
$data2 = $_POST['title'];


$data3 =  $_POST['conteudo'];







$sth=$pdo->prepare('INSERT INTO repo_0w(id_0w, repo_name, repo_msg, repo_invest ) VALUES (NULL, ?, ?, ?)');
$data4 = 0;

$sth->bindParam(1, $data2, PDO::PARAM_STR, 500);
$sth->bindParam(2, $data3, PDO::PARAM_STR, 500);
$sth->bindParam(3, $data4, PDO::PARAM_INT, 11);
$sth->execute();





 
 





#header('location: ../profile/home/');


 exit();  




?>