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
                    <th>Status</th>
                    <th>Ação</th>
                </tr>
                <?php
				$buscarusuarios=mysqli_query($conectar,"SELECT * FROM usuarios WHERE nivel='1'");
				if(mysqli_num_rows($buscarusuarios) == 0){
				echo"Nenhum usuário cadastrado no sistema!";
				}else{
					while($linha=mysqli_fetch_array($buscarusuarios)){
				?>
                <tr>
                	<td><?php echo $linha["nome"];?></td>
                    <td><?php echo $linha["status"];?></td>
                    <td><?php $id=$linha["id"]; if($linha["status"] == 0){ echo "<a href=\"login.php?acao=aprovar&amp;id=$id\">Aprovar</a>";}else{echo"<a href=\"login.php?acao=bloquear&amp;id=$id\">Bloquear</a>";}?></td>
                </tr>
				<tr></tr>
				<tr><td><a href="login.php?acao=logout" title="Fazer logout!">Logout &raquo;</a></td></tr>
                <?php } }?>
            </table>
			
            <?php }else{?>
            <p>Usuário comum</p>
            <?php }?>
        <!--acomodar-->
        </div>
		
       <!--login-->
    </div>
	
</body>
</html>