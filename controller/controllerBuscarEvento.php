<?php

    $conecta = mysqli_connect('localhost', 'root', '');
    mysqli_select_db($conecta, 'database');


    $nome = $_POST['nome'];
    $busca = mysqli_query($conecta,"SELECT * FROM evento WHERE nome = '$nome'");
    $registro = mysqli_fetch_array($busca);


    $descricao = $registro['descricao'];
    $arquivo = $registro['imagem'];
    $data = $registro['data'];

echo'
    <h1>Resultado da Busca:</h1>
    <form method="post" action="controllerEditarEvento.php" enctype="multipart/form-data">
            Nome:
            <input type="text" required name="nome" placeholder="Nome*" value="'.$nome.'"><br><br>
            Data:
            <input class="datas" type="date" required name="data" value="'.substr($data,0,10).'">
            Hora de Inicio:
            <input class="horas" type="time" required name="hora" value="'.substr($data,11,5).'"> <br><br>
            <div class="col">
            <h2>Imagem Armazenada no Banco de Dados</h2>
            <img src="../uploads/'.$arquivo.'" alt="Imagem">
            </div><br>
            Escolher outra imagem:<br>
            <input type="radio" name="opcao" value="nao" checked> Não <br>
            <input type="radio" name="opcao" value="sim"> Sim
            <input type="file" name="arquivo" accept="image/*"/><br><br>
            Descrição:<br>
            <textarea id="area" name="descricao" required rows="10" cols="60">'.$descricao.'</textarea><br><br>
            <input type="submit" value="Salvar">
            <input type="button" value="Voltar" onClick="history.go(-1)">
    </form>
	';
?>