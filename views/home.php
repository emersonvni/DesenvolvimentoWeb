<?php
$page="Desenvolvimento Web - Painel Administrativo";
include("header.php");
?>

	<br><br><br>
		<div id="login" class="form bradius">
    	<div class="message" style="<?php echo $display;?>"></div>
        <div class="acomodar">
        <?php
		$conectar=new DB;
		$conectar=$conectar->conectar();
		if($nivel == 2){
			?>
			<table width="100%" border="0">
            	<tr>
                	<th>Nome</th>
                    <th>Endereço</th>
                    <th>Email</th>
                </tr>
                <?php
				$buscarusuarios=mysqli_query($conectar,"SELECT * FROM usuarios");
				if(mysqli_num_rows($buscarusuarios) == 0){
				echo"Nenhum usuário cadastrado no sistema!";
				}else{
					while($linha=mysqli_fetch_array($buscarusuarios)){
				?>
                <tr>
                	<td><?php echo $linha["nome"];?></td>
                    <td><?php echo $linha["endereco"];?></td>
					<td><?php echo $linha["email"];?></td>
                    <td><?php 
							  $id=$linha["id"];							  
							  $nome=$linha["nome"];
							  $endereco=$linha["endereco"];
							  $email=$linha["email"];
							  if($linha["status"] == 1){
								  echo "<a href=\"views/editar.php?id=$id&nome=$nome&endereco=$endereco&email=$email\">Editar</a>";
							  }
						?>
					</td>
                </tr>
				<tr></tr>
				
                <?php } }?>
            </table>
			
            <?php }else{?>
            <p>Usuário comum</p>
            <?php }?>
			<a href="login.php?acao=logout" title="Fazer logout!">Logout &raquo;</a>
        <!--acomodar-->
        </div>
		
       <!--login-->
    </div>
	
</body>
</html>