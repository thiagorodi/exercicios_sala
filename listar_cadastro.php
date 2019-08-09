<?php

	include("menu.php");

	include("conexao.php");

    $consulta = "SELECT * FROM dados";
	
    $resultado = mysqli_query($conexao,$consulta) 
		or die("Erro. Não foi possível consultar a lista de cliente no sistema.");

	echo "<table border='1'>";

	echo "<tr>
			<th>Nome</th>
			<th>Email</th>
			<th>CPF</th>
			<th>Sexo</th>
			<th>Data de Nascimento</th>
		  </tr>";

    while($linha=mysqli_fetch_assoc($resultado)){     
        echo "
		<tr>
			<td>" .$linha["nome"]. "</td>
			<td>" .$linha["email"]. "</td>
			<td>" .$linha["cpf"]. "</td>
			<td>" .$linha["sexo"]. "</td>
			<td>" .$linha["data_nascimento"]. "</td>
		</tr>
		";
    }
	
	echo "</table>";

?>