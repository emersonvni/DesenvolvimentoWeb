<?php
	include "conexao.php";
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
			$endereco=$linha['endereco'];
			$email=$linha['email'];
			$status=$linha['status'];
			echo "<strong>Nome:</strong>".@$nome;			
			echo "<br /><br />";
			echo "<strong>Endereço:</strong>".@$endereco;
			echo "<br /><br />";
			echo "<strong>Email:</strong>".@$email;
			echo "<br /><br />";			
			echo "<strong>Status:</strong>".@status;
			echo "<br /><br />";
			echo "<a href='editar.php'> Editar usuario</a>";
			echo "<br /> <hr />";
		}
	}else
	{
		echo "Desculpe,nenhum usuário com este nome foi encontrado";
	}
	
?> 

<?php
		if($status == 2){
			?>
			<table width="100%" border="0">
            	<tr>
                	<th>Nome</th>
                    <th>Endereco</th>
                    <th>Email</th>
					<th>Senha</th>
                </tr>
                <?php
					$buscarusuarios=mysqli_query($conexao,"SELECT * FROM usuarios WHERE status='1'");
					if(mysqli_num_rows($buscarusuarios) == 0){
					echo"Nenhum usuário cadastrado no sistema!";
					}else{
						while($linha=mysqli_fetch_array($buscarusuarios)){
				?>
                <tr>
                	<td><?php echo $linha["nome"];?></td>
                    <td><?php echo $linha["endereco"];?></td>
                    <td><?php $id=$linha["ID"];?></td>
                </tr>
                <?php } }?>
            </table>
            <?php }else{?>
            <p>Usuário comum</p>
            <?php }?>
</body>
</html>