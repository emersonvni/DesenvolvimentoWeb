<?php
	include "conexao.php";
?>
<div class="topnav">
    <a href="../../index.php">Home</a>
    <a href="../../sobre.php">Institucional</a>
    <a href="../../contato.php">Fale Conosco</a>
    <a href="../../anuncio.php">Anúncios</a>
    <a href="../../login.php">Login</a>
    <a href="../../cadastrarUsuario.php">Cadastrar Usuário</a>
</div>
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
		echo "<center><a href=\"busca.php\">Buscar, Editar e Excluir Usuários</a></center>";
        echo "<center><a href=\"../../cadastrarEvento.php\">Cadastrar Eventos</a></center>";
        echo "<center><a href=\"../../buscarEvento.php\">Buscar ,Editar e Excluir Eventos</a></center>";
			
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