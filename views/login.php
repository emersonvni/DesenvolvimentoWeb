<?php
$page="Desenvolvimento Web - Login";
include("header.php");
?>

	<div id="login" class="form bradius">
    	<div class="message" style="<?php echo $display;?>"></div>        
        <div class="acomodar">
        	<center><form action="login.php?acao=logar" method="post">			
            <label for="email">E-mail: </label><input id="email" type="text" class="txt bradius" name="email" value="" /><br><br>
            <label for="senha">Senha: </label><input  id="senha" type="password" class="txt bradius" name="senha" value="" /><br><br>
            <input type="submit" class="sb bradius" value="Entrar" />
            </form></center>
        <!--acomodar-->
        </div>
       <!--login-->
    </div>
</body>
</html>