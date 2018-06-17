<?php
	include "conexao.php";
	
?>
<html>
<head>
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
<title>Autenticar</title>
<script type="text/javascript">
function loginsuccessfully()
{
	setTimeout("window.location='painel.php'",5000);
}

function loginfailed()
{
	setTimeout("window.location='../../login.php'",5000);
}
</script>
</head>
<body>
<?php
	include "../../topnav.php";
?>

<?php
		
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE email='$email' AND senha='$senha'") or die(mysqli_error());
	$row = mysqli_num_rows($sql);
	if($row > 0)
	{
		session_start();
		$_SESSION['email']=$_POST['email'];
		$_SESSION['senha']=$_POST['senha'];
		echo "<br><br><br>";
		echo "<center>Você foi logado com sucesso! Estamos te redirecionando</center>";
		echo "<script>loginsuccessfully()</script>";
	}else
	{
		echo "<br><br><br>";
		echo "<center>Nome de usuario ou senha inválidos! Aguarde um instante para tentar novamente</center>";
		echo "<script>loginfailed()</script>";
	}

?>


</body>
</html>