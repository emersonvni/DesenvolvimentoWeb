<?php
	include "conexao.php";
?>
<?php
	include "../../topnav.php";
?>
<?php
	session_start();
	if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"]))
	{
		header("Location: ../../login.php");
		exit;
	}else
	{
		echo "<br><br><br>";
		echo "<center><strong>Você está Logado! :D</strong> </center>";
		echo "<br><br>";
		echo "<center><a href=\"busca.php\">Buscar e Editar</a></center>";
		echo "<center><a href= \"excluir.php\"> Excluir </a></center>";
			
	}
?>

<html>
<head>
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<title>Painel</title>
</head>
<body>
	<center><a href="logout.php">Logout</a></center>
</body>
</html>