<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Usuário</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="headerad">
  <h1>Cadastro de Usuário</h1>
  
</div>

<div class="topnav">
    <a href="index.php">Home</a>
    <a href="sobre.php">Institucional</a>
    <a href="contato.php">Fale Conosco</a>
    <a href="anuncio.php">Anúncios</a>
    <a href="login.php">Login</a>
    <a href="cadastrarUsuario.php">Cadastrar Usuário</a>
</div>

<div class="row" align="center">
  
  <div>
    	
			<form name="login" method="post" action="controller\desenvolvimento\cadastrando.php">
			  <br><br><br><br>
			  Nome:<br>
			  <input type="text" name="nome"><br><br>	
			  Endereço:<br>
			  <input type="text" name="endereco"><br><br>	
			  Informe o E-mail:<br>
			  <input type="text" name="email"><br><br>				  		  
			  Digite a senha:<br>
			  <input type="password" name="senha"><br><br>			  
			  <input type="submit" value="Cadastrar">
			  <input type="reset" value="Apagar Campos">
			 
			 

			</form></div>
  
</div>
<br><br><br><br><br>

<div class="footer">
  <p>Footer</p>
</div>
  
</body>
</html>
