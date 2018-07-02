<?php
$page="Desenvolvimento Web - Cadastro";
include("header.php");
?>

	<div id="login" class="form bradius" style="top:150px;">
    	<div class="message bradius " style="<?php echo $display;?>"><?php echo $msg;?></div>        
        <div class="acomodar">
        	<center><form action="cadastrarUsuario.php?acao=cadastrar" method="post">
            <label for="nome">Nome: </label><input id="nome" type="text" class="txt bradius" name="nome"  /><br><br>
             <label for="endereco">Endereço: </label><input id="endereco" type="text" class="txt bradius" name="endereco"  /><br><br>
            <label for="email">E-mail: </label><input id="email" type="text" class="txt bradius" name="email" /><br><br>
            <label for="senha">Senha: </label><input  id="senha" type="password" class="txt bradius" name="senha"  /><br><br>
            <input type="submit" class="sb bradius" value="Cadastrar" />
            </form></center>
        <!--acomodar-->
        </div>
       <!--login-->
    </div><br><br><br>
</body>
</html>