<?php

	if(isset($_POST['submit'])){


		include("config.php");

		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$contato = $_POST['contato'];
		$opcao01 = $_POST['opcao01'];
		$opcao02 = $_POST['opcao02'];
		
		//$horario = isset($_POST['horario']) ? $_POST['horario'] : null;
		$horario = $_POST['horario'];
		$hr="";
		foreach($horario as $hrresult){
			$hr.= $hrresult.",";
		}
		
		
			
		//$horario2 = $_POST['horario2'];
		//$horario3 = $_POST['horario3'];	
		//$curso = isset($_POST['curso']) ? $_POST['horario'] : null;
		$curso = $_POST['curso'];
		$cr="";
		foreach($curso as $crresult){
			$cr.= $crresult.",";
		}
		
		//$curso2 = $_POST['curso2'];
		//$curso3 = $_POST['curso3'];
		$resp = $_POST['resp'];

		$sql = "INSERT INTO formulario(nome, email, contato, opcao01, opcao02, horario, curso, resp) VALUES ('$nome', '$email', '$contato', '$opcao01', '$opcao02', '$hr', '$cr', '$resp')";

	if(mysqli_query($conexao, $sql)){
		echo "Cadastro feito";
		}else{
			echo "erro" .mysqli_connect_error($conexao);
		}
	}
	mysqli_close($conexao);

?>