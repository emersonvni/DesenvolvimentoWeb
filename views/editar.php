<?php
$page="Desenvolvimento Web - Editar";
include("header.php");
?>
<?php
	$id=$_GET["id"];	
	$nome=$_GET["nome"];	
	$endereco=$_GET["endereco"];
	$email=$_GET["email"];
	
	
?>
	<div id="login" class="form bradius" style="top:150px;">
    	<div class="message bradius " style="<?php echo $display;?>"><?php echo $msg;?></div>        
        <div class="acomodar">
        	<center><form action="editarUsuario.php?acao=editar" method="post">
            <label for="nome">Nome: </label><input id="nome" type="text" class="txt bradius" name="nome" value="<?php echo $nome; ?>"  /><br><br>
            <label for="endereco">Endereço: </label><input id="endereco" type="text" class="txt bradius" name="endereco" value="<?php echo $endereco; ?>"  /><br><br>
            <label for="email">E-mail: </label><input id="email" type="text" class="txt bradius" name="email" value="<?php echo $email; ?>" /><br><br>
            <?php echo "testando $id"; ?>
            <input type="submit" class="sb bradius" value="Editar" />
            </form></center>
        <!--acomodar-->
        </div>
       <!--login-->
    </div><br><br><br>
</body>
</html>