<?php
	include "conexao.php";
?>
<html>
<head>
	<title>Resultado de busca</title>
</head>
<body>
<?php
	$buscar = $_POST['buscar'];
	$sql = mysqli_query($conexao,"SELECT * FROM usuarios WHERE nome LIKE '%".$buscar."%'");
	$row = mysqli_num_rows($sql);
	if($row > 0)
	{
		while($linha = mysqli_fetch_array($sql))
		{
			$nome= $linha['nome'];
			$endereco=$linha['endereco'];
			$email=$linha['email'];
			echo "<strong>Nome:</strong>".@$nome;
			echo"<br /><br />";
			echo "<strong>Email:</strong>".@$email;
			echo"<br /><br />";
			echo "<strong>Endereço:</strong>".@$endereco;
			echo "<br /> <hr />;
		}
	}else
	{
		echo "Desculpe,nenhum usuário com este nome foi encontrado";
	}
	
?>
</body>
</html>