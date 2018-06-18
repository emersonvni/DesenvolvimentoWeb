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
        <?php
            // Aqui você se conecta ao banco
            $conecta = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($conecta, 'database');

            // Executa uma consulta
            //$busca = mysqli_query($conecta,"SELECT * FROM evento");
            $sql = "SELECT * FROM evento";
            $query = $conecta->query($sql);
            while ($registro = $query->fetch_assoc()) {
                $nome = $registro['nome'];
                $descricao = $registro['descricao'];
                $arquivo = $registro['imagem'];
                $data = $registro['data'];

                echo '
                    <div class="col">
                    <h2>'.$nome.'</h2>
        
                    <a href="#" align="center"><img src="uploads/'.$arquivo.'" alt="Imagem" /></a>
                    <p>'.$descricao.' </p>
                    <p>Data e Hora: '.$data.'</p>
                    <form action="anuncio1.php" method="post">
                        <input type="hidden" name="nome" value="'.$nome.'">
                        <input type="submit" value="Mais informações">
                    </form>
                    </div>
                ';


            }
        ?>
  </div>
</div>
    </div>


</div>

<div class="footer">
    © 2018 Radiant Energy. All rights reserved | Design by alguém.
</div>
  
</body>
</html>
