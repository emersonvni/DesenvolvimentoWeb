<!DOCTYPE html>
<html>
<head>
	<title>Editar Usuário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="headerad">
  <h1>Editar de Usuário</h1>
  
</div>

<div class="topnav">
    <a href="index.php">Home</a>
    <a href="sobre.php">Institucional</a>
    <a href="contato.php">Fale Conosco</a>
    <a href="anuncio.php">Anúncios</a>
    <a href="login.php">Login</a>
    <a href="cadastrarUsuario.php">Cadastrar Usuário</a>
</div>

<?php
include("includes/header.php");
if(isset($logado)){
	include("views/home.php");
}else{
	include("views/editar.php");
}
?>
<br><br><br><br><br>

<div class="footer">
  <p>Footer</p>
</div>
  
</body>
</html>
