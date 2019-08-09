<?php
	include("menu.php");
?>

<fieldset>
<legend>Inserir novo cadastro</legend>
<form method="post" action="insere_dados.php">

	<input type="text" name="nome" placeholder="Insira o nome ..." /><br /><br />
	<input type="text" name="email" placeholder="Insira o email..." /><br /><br />
	<input type="text" name="cpf" placeholder="Insira o cpf..." /><br /><br />

	<label>Sexo</label>
    <input type="radio" name="sexo" value="M"/> Masculino
    <input type="radio" name="sexo" value="F"/> Feminino <br /><br />

	<input type="date" name="data_nascimento" placeholder="Insira a cidade do Cliente..." /><br /><br />

	<button>Enviar</button>

</form>
</fieldset>
