<html>
<head>
    <title>Sistema de busca</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>


<?php

    $conecta = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conecta, 'database');


    $nome = $_POST['nome'];
    $busca = mysqli_query($conecta,"SELECT * FROM evento WHERE nome = '$nome'");
    $registro = mysqli_fetch_array($busca);


    $descricao = $registro['descricao'];
    $arquivo = $registro['imagem'];
    $data = $registro['data'];

    if($busca) {
        echo '
        <div class="result">
        <h1>Resultado da Busca:</h1>
        <form method="post" action="controllerEditarEvento.php" enctype="multipart/form-data">
                Nome:
                <input type="text" required name="nome" placeholder="Nome*" value="' . $nome . '"><br><br>
                Data:
                <input class="datas" type="date" required name="data" value="' . substr($data, 0, 10) . '">
                Hora de Inicio:
                <input class="horas" type="time" required name="hora" value="' . substr($data, 11, 5) . '"> <br><br>
                <h2>Imagem Armazenada no Banco de Dados</h2>
                <img src="../uploads/' . $arquivo . '" alt="Imagem">
                <br><br><br>
                Escolher outra imagem:<br>
                <input type="radio" name="opcao" value="nao" checked> Não
                <input type="radio" name="opcao" value="sim"> Sim
                <input type="file" name="arquivo" accept="image/*"/><br><br>
                Descrição:<br>
                <textarea id="area" name="descricao" required rows="10" cols="60">' . $descricao . '</textarea><br><br>
                <input type="submit" name="escolha" value="Salvar Alterações">
                <input type="submit" name="escolha" value="Excluir Evento">
                <input type="button" value="Voltar" onClick="history.go(-1)">
        </form>
        </div>
        ';
    }
    else{
        echo '<p> Registro não encontrado!</p>';
        echo mysqli_error($conecta);
    }
?>

</body>
</html>

