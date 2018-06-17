<?php
	include "conexao.php";
?>
<html>
<head>
	<title>Cadastrando</title>
</head>
<body>

<?php
	$nome=$_POST['nome'];
	$endereco=$_POST['endereco'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	
	$sql = mysqli_query($conexao,"INSERT INTO usuarios(nome,endereco,email,senha,status) VALUES('$nome','$endereco','$email','$senha',1)");
	header("Location: ../../login.php");
?>
	
</body>
</html>