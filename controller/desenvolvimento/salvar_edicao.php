<?php
	include "conexao.php";
?>
<?php
	$id = $_POST["ID"];
	$nome = $_POST["nome"];
	$endereco = $_POST["endereco"];
	$email = $_POST["email"];
	$status = $_POST["status"]; 

	mysqli_query($conexao,"UPDATE usuarios SET nome = '$nome', endereco = '$endereco', email = '$email', status = '$status' WHERE ID = $ID");
	mysqli_close();
	header("Location: painel.php");
	

?>