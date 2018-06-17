<?php
	include "conexao.php";
?>

<?php	

	// Executa uma consulta 
	$sql = mysqli_query($conexao,"SELECT * FROM usuarios");
	$row = mysqli_num_rows($sql);
	if($row > 0)
	{
		while($linha = mysqli_fetch_assoc($sql))
		{
			$id = $linha['ID'];
			$nome= $linha['nome'];
			$endereco=$linha['endereco'];
			$email=$linha['email'];
			$status=$linha['status'];
			
			echo "
				<form name=\"form1\" method=\"post\" action=\"salvar_edicao.php\">			
				Nome: <input name=\"nome\" type=\"text\" id=\"id\" value=\"$nome\" size=\"35\"/><br><br>
				Endereço: <input name=\"endereco\" type=\"text\" id=\"id\" value=\"$endereco\" size=\"35\"/><br><br>
				Email: <input name=\"email\" type=\"text\" id=\"id\" value=\"$email\" size=\"35\"/><br><br>
				Status: <input name=\"status\" type=\"text\" id=\"id\" value=\"$status\" size=\"35\"/><br><br>
				
				<input type=\"submit\" onclick=\"return confirm('Deseja mesmo editar esse registro?');\" name=\"Submit\" value=\"SALVAR ALTERAÇÕES\"/>
				</form>
			";
		}
		
	}


?>    
 
</div></div>

