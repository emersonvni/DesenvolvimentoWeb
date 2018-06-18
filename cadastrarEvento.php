<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Eventos</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="headerad">
  <h1>Cadastro de Eventos</h1>
  
</div>

<div class="topnav">
    <a href="index.php">Home</a>
    <a href="sobre.php">Institucional</a>
    <a href="contato.php">Fale Conosco</a>
    <a href="anuncio.php">Anúncios</a>
    <a href="login.php">Login</a>
    <a href="cadastrarUsuario.php">Cadastrar Usuário</a>
</div>

<div class="row">
  <div class="column side">
    
  </div>
  <div class="column middle">
    
		<form method="post" action="controller\controllerCadastrarEvento.php" enctype="multipart/form-data">
			<br><br><br>
			Nome:<br>
			<input type="text" required name="nome" placeholder="Nome*"><br><br>
            Data:
            <input class="datas" type="date" required name="data">
            Hora de Inicio:
            <input class="horas" type="time" required name="hora"> <br><br>
			Enviar imagem:<br>
			<input type="file" required name="arquivo" accept="image/*" /><br><br>
			Descrição:<br>
			<textarea name="descricao" required rows="10" cols="60"></textarea><br><br>
			<input type="submit" value="Cadastrar">
			<input type="reset" value="Apagar Campos">
			</form></div></div>
  <div class="column side">
    
  </div>
</div>
<br><br><br><br><br><br><br>
<div class="footer">
  <p>Footer</p>
</div>
  
</body>
</html>
