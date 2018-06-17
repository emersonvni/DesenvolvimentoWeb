<?php
	include "conexao.php";
?>
<?php
	include "../../topnav.php";
?>
<?php
	$id = $_POST['id'];
	mysqli_query($conexao,"DELETE FROM usuarios where id ='$id'");
	header("Location: painel.php");
?>



