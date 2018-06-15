<?php

$conecta = mysqli_connect('localhost','root','');
echo 'conectou';
mysqli_select_db($conecta,'database');

$nome = $_POST['nome'];
$email = $_POST['email'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$query = mysqli_query($conecta,"INSERT INTO usuario VALUES ('$nome','$email','$login','$senha')");
if($query)
{
	echo 'Cadastrado com sucesso';
}else
{
	echo 'Não foi possivel efetuar o cadastro.';
	echo mysqli_error($conecta);
}



?>