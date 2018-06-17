<?php
	include "conexao.php";
?>
<?php
	$sql = mysqli_query($conexao,"SELECT * FROM usuarios");
	$row = mysqli_num_rows($sql);
	
	mysql_query("DELETE * FROM usuarios where ID='$ID'");
?>



