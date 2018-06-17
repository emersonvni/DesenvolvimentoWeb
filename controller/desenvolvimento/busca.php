<?php
	include "../../topnav.php";
	echo "<br><br><br><br>"
?>

<html>
<head>
	<title>Sistema de busca</title>
	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<form name="searchform" method="post" action="resultado.php">
	
	Pesquisar usuário: <input type="text" name="buscar" />
	
	<input type="submit" value="Buscar">
</form>
</body>
</html>