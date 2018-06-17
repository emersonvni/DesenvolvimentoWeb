<?php
	include "conexao.php";
?>
<?php
	$id = $_POST['id'];
	mysqli_query($conexao,"DELETE FROM usuarios where id ='$id'");
	header("Location: painel.php");
?>



