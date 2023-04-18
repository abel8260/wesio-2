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







$sth=$pdo->prepare('UPDATE repo_0w SET repo_invest = ? WHERE repo_name = ?');


$sth->bindParam(1, $data3, PDO::PARAM_INT, 11);
$sth->bindParam(2, $data2, PDO::PARAM_STR, 500);
$sth->execute();





 
 





 header('location: ./profileREPO.php');


 exit();  




?>