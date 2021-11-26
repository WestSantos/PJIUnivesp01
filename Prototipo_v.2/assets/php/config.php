<?php
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'formpi';
	
	$conexao = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);



if(!$conexao){
	die("ERRO: ".mysqli_connect_error());
}








	

?>