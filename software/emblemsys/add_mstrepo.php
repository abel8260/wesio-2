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







$sth=$pdo->prepare('INSERT INTO mst_repo_profile4(id, titulo, conteudo, usuarioo ) VALUES (NULL, ?, ?, ?)');


$sth->bindParam(1, $data2, PDO::PARAM_STR, 255);
$sth->bindParam(2, $data3, PDO::PARAM_STR, 255);
$sth->bindParam(3, $userr, PDO::PARAM_STR, 255);
$sth->execute();





 
 





#header('location: ../profile/home/');


 exit();  




?>