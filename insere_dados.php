<?php

	include("menu.php");

    include("conexao.php");

	$nome  = $_POST["nome"];
	$email = $_POST["email"];
	$cpf   = $_POST["cpf"];
	$sexo  = $_POST["sexo"];
	$data_nascimento = $_POST["data_nascimento"];

    $insercao = 
		"INSERT INTO dados
				VALUES ('$nome','$email','$cpf','$sexo','$data_nascimento')";
	
	// mysqli_error($conexao)
    mysqli_query($conexao,$insercao) 
		or die("Erro. Não foi possível inserir o cliente no sistema.");

	echo "Dados cadastrado com sucesso.";

?>