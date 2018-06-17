<?php
	include "conexao.php";
?>
<?php
	include "../../topnav.php";
?>

<?php
			$id = $_POST['id'];
			$nome= $_POST['nome'];
			$endereco=$_POST['endereco'];
			$email=$_POST['email'];
			$status=$_POST['status'];
			
	echo "
		<br><br><br>
	    <center><form method='post' action='salvar_edicao.php'>			
				Nome: <input name='nome' type='text' value='".$nome."' size='35'/><br><br>
				Endereço: <input name='endereco' type='text' value='".$endereco."' size='35'/><br><br>
				Email: <input name='email' type='text' value='".$email."' size='35'/><br><br>
				Status: <input name='status' type='text' value='".$status."' size='35'><br><br>
				<input type='hidden' name='id' value='".$id."'>
				
				<input type='submit' value='SALVAR ALTERAÇÕES'/>
		</form></center>
			";
?>   

<html>
<head>
	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
</body>

</html> 


