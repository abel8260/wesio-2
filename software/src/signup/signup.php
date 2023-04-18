<?php
session_start(); 
include('../db/conexao.php');



if(empty($_POST['usuarix']) || empty($_POST['senha'])){
	header('location:signup.html'); 
	exit();
}

$data2 = $_POST['usuarix'];
$userr  = $data2;

$data3 =  md5($_POST['senha']);
$senhaa = $data3;






$sth=$pdo->prepare('INSERT INTO users_0v(id_0v, nome, senha, momento_registro) VALUES (NULL, ?, ?, NOW())');


$sth->bindParam(1, $userr, PDO::PARAM_STR, 255);
$sth->bindParam(2, $senhaa, PDO::PARAM_STR, 32);

$sth->execute();





 $_SESSION['usuario'] = $userr ;
 





header('location: ../profile/home/');


 exit();  




?>