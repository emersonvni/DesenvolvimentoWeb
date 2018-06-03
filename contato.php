<!DOCTYPE html>
<html>
<head>
	<title>Fale Conosco</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="topnav">
    <a href="index.php">Home</a>
    <a href="sobre.php">Institucional</a>
    <a href="contato.php">Fale Conosco</a>
    <a href="anuncio.php">Anúncios</a>
    <a href="login.php">Login</a>
    <a href="cadastrarUsuario.php">Cadastrar Usuário</a>
    <a href="cadastrarEvento.php">Cadastrar Evento</a>
</div>

<div class="headerad">
  <h1>Entre em Contato Conosco</h1>
</div>



<div class="row">

  <div class="column side">
  </div>

  <div class="column middle">

  	<h2>CONTATO:</h2>
	<p>CEL: (20) 99960-7070</p>
	<p>E-mail: email_ficticio@gmail.com</p>

	<h2>ATENDIMENTO:</h2>
	<p>Centro de Ciências Agrárias e Engenharias</p>
	<p>S/N Alto Universitário</p>
	<p>Alegre – ES, 29500-000</p>
	<p>Segunda a sexta, de 8:00 às 17:30</p>

	<h2>Enviar Mensagem:</h2>
    <form method="post" action="controller\controllerContato.php">
	  <input type="text" name="nome" placeholder="Nome"><br><br>
	  <input type="text" name="email" placeholder="E-mail"><br><br>
	  <input type="text" name="assunto" placeholder="Assunto"><br><br>
	  <input type="text" name="mensagem" placeholder="Mensagem"><br><br>
	  <input type="submit">
	</form>
  </div>
  <div class="column side">
  </div>
</div>

<div class="footer">
	© 2018 Radiant Energy. All rights reserved | Design by alguém.
</div>
  
</body>
</html>
