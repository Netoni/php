<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<title>Logar</title>
	</head>
	<body>
		<div class="container">
		<h3>Logar no Sistema</h3>
		<fieldset>
			<legend>:::SISTEMA:::</legend>
			<form action="verificarlogin.php" method="post">
				<label for="email">E-mail.:</label><input type="text" name="email" placeholder="Digite o E-mail" class="form-control">
				<br><br>
				Senha.: <input type="password" name="senha" placeholder="Digite a Senha" class="form-control">
				<br><br>
				<input type="submit" value="Entrar no Sistema" class="btn btn-info">
			</form>
			<?php
				if(isset($_GET["m"])){
					echo base64_decode($_GET["m"]);
				}
			?>
		</fieldset>
	</body>
</html>