<?php
	include "busca\conexao.php";
?>
<?php
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"]))
	{
		header("Location: login.php");
		exit;
	}else
	{
		echo "<center>Você está Logado! :D</center>";
	}
?>

<html>
<head>
<title>Painel</title>
</head>
<body>
	<a href="logout.php">Logout</a>
</body>
</html>