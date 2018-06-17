<?php

    $conecta = mysqli_connect('localhost', 'root', '');
    echo 'conectou';
    mysqli_select_db($conecta, 'database');


    $nome = $_POST['nome'];
    $busca = mysqli_query($conecta,"SELECT * FROM evento WHERE nome = '$nome'");
    $registro = mysqli_fetch_array($busca);


    $descricao = $registro['descricao'];
    $arquivo = $registro['imagem'];
    $data = $registro['data'];

    echo "Descrição: ".$descricao."Data: ".$data."Arquivo: ".$arquivo;
?>