<?php
	if(isset($_POST['email']) && !empty($_POST['email'])){
		echo "O usuário enviou os dados!";
	}
?>
<hr>
<h1>Receber dados de um formulário</h1>
<form method="POST">
	E-mail:<br>
	<input type="text" name="email"><br><br>

	Senha:<br>
	<input type="password" name="senha"><br><br>

	<input type="submit" value="Enviar Dados">
</form>