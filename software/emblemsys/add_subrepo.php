<?php
session_start(); 
include('../src/db/conexao.php');



if(empty($_POST['title']) || empty($_POST['link_slug']||empty('desc'))){
	header('location:profileREPO.php'); 
	exit();
}
$userr = $_SESSION['usuario']   ;
$data2 = $_POST['title'];


$data3 =  $_POST['link_slug'];


$data4 =  $_POST['desc'];




$sth=$pdo->prepare("INSERT INTO sub_repo_0z(id, repo, user_1, user_link, nome ) VALUES (NULL, ?, ?, ?, ?)");


$sth->bindParam(1, $data2, PDO::PARAM_STR, 255);
$sth->bindParam(2, $userr, PDO::PARAM_STR, 255);
$sth->bindParam(3, $data3, PDO::PARAM_STR, 255);
$sth->bindParam(4, $data4, PDO::PARAM_STR, 255);
$sth->execute();





 
 





#header('location: ../profile/home/');


 exit();  




?>