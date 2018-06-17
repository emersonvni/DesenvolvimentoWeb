<?php
	include "busca\conexao.php";
	
?>
<html>
<head>
<title>Autenticar</title>
<script type="text/javascript">
function loginsuccessfully()
{
	setTimeout("window.location='painel.php'",50);
}

function loginfailed()
{
	setTimeout("window.location='login.php'",50);
}
</script>
</head>
<body>

<?php
	echo "entrou";	
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'") or die(mysqli_error());
	$row = mysqli_num_rows($sql);
	if($row > 0)
	{
		session_start();
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];
		echo "Você foi logado com sucesso! Estamos te redirecionando";
		echo "<script>loginsuccessfully()</script>";
	}else
	{
		echo "<center>Nome de usuario ou senha inválidos! Aguarde um instante para tentar novamente</center>";
		echo "<script>loginfailed()</script>";
	}

?>


</body>
</html>