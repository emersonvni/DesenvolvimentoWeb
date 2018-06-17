<?php
	include "conexao.php";
?>
<?php
	include "../../topnav.php";
?>
<html>
<head>
	<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all" />
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
            $id= $linha['id'];
			$endereco=$linha['endereco'];
			$email=$linha['email'];
			$status=$linha['status'];
			echo "
            <br><br><center><div class='col'>
                <br /><br />
                <center><strong>Nome:</strong>".@$nome."			
                <br /><br />
                <strong>Endereço:</strong>".@$endereco."
                <br /><br />
                <strong>Email:</strong>".@$email."
                <br /><br />			
                <strong>Status:</strong>".@status."
                <br /><br />
                <form action='editar.php' method='post'>
                    <input type='hidden' name='id' value='".$id."'>
                    <input type='hidden' name='nome' value='".$nome."'>
                    <input type='hidden' name='endereco' value='".$endereco."'>
                    <input type='hidden' name='email' value='".$email."'>
                    <input type='hidden' name='status' value='".$status."'>
                    <input type='submit' name='editar' value='Editar'>
                </form>
                <form action='excluir.php' method='post'>
                    <input type='hidden' name='id' value='".$id."'>
                    <input type='submit' name='excluir' value='Excluir'>
                </form>
              </div></center>
            ";
		}
	}else
	{
		echo "Desculpe,nenhum usuário com este nome foi encontrado";
	}
	
?> 


</body>
</html>