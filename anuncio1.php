<!DOCTYPE html>
<html>
<head>
	<title>Anuncio</title>
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
</div>

<div class="headerad">
  <h1>Anúncios</h1>
</div>
	<div class="row">
		<div class="column side">
		</div>
		<div class="column middle">
			<div align="center">

                <?php
                include ("model/AnuncioModel.php");
                // Executa uma consulta
                $nome = $_POST['nome'];
                $registro = AnuncioModel::buscarAnuncio($nome);


                $descricao = $registro['descricao'];
                $arquivo = $registro['imagem'];
                $data = $registro['data'];

                    echo '

                        <section>
                            <header>
                                    <h2>'.$nome.'</h2>
                            </header>
                            
                                <a href="#" align="center"><img src="uploads/'.$arquivo.'" alt="Imagem" /></a>
                                <pre>'.$descricao.'</pre>
                                <pre><strong>Dia: '.substr($data,0,10).' Hora de Início:'.substr($data,11,5).'</strong></pre>
                        </section>
                                ';
                ?>
			</div align="center">
			
		</div>
		<div class="column side">
		</div>
  </div>
</div>
	</div>

 
</div>

<div class="footer">
  <p>Footer</p>
</div>
  
</body>
</html>
