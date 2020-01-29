<?php 
	if(isset($_POST['nome'])){

		$nome = $_POST['nome'];
		//Cria o arquivo de texto para receber o nome
		file_put_contents("teste.txt", $nome.", ", FILE_APPEND);

		//Correção do problema redirecionando ao index, após a submissão
		header("Location: index.php");
	}
?>

<h1>ANTI-F5</h1>
<hr>
<form method="POST">
	Nome:<br>
	<input type="text" name="nome"><br><br>
	<input type="submit" value="Enviar">
</form>

<!--
Sem o devido tratamento, os dados são enviados
repetidamente cada vez que a página for atulizada.
-->