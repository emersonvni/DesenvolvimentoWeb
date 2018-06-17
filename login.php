<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="headerad">
  <h1>Login</h1>

</div>

<?php
	include "topnav.php";
?>

<div class="row" align="center">
  <div align="center">
    <br><br>
		<form name="loginform" method="post" action="controller\desenvolvimento\autenticacao.php">
			<br><br><br>
			Email:<br>
			<input type="text" name="email"><br><br>
			Senha:<br>
			<input type="password" name="senha"><br><br>
			<input type="submit" value="Entrar">
			<input type="submit" value="Cancelar">
		</form>
			
  </div>
  
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="footer">

  <p>Footer</p>
</div>
  
</body>
</html>
