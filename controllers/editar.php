<?php
$conectar=new DB;
$conectar=$conectar->conectar();
/*if($startaction == 1 && $acao == "editar"){
		if($nivel == 2){
			if(isset($_GET["id"])){
				$id=$_GET["id"];
				$nome=$_POST["nome"];
				$endereco=isset($_POST["endereco"]);
				$email=isset($_POST["email"]);
			}
		}
}*/



if($startaction == 1 && $acao == "editar"){
		$id=$_GET["id"]
		$nome=$_GET["nome"];
		$endereco=$_GET["endereco"];
		$email=$_GET["email"];			
		
	
		if(empty($nome) || empty($endereco) || empty($email) ){
			$msg="Preencha todos os campos!";
		}
		//Todos os campos preenchidos
		else{
			//Email válido
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				//Executa a classe de cadastro
				$conectar=new Cadastro;
				echo"<div class=\"flash\">";
				$conectar=$conectar->editar($nome, $endereco, $email); 
				echo"</div>";
			}
			
			//E-mail inválido
			else{
				$msg="Digite um e-mail válido!";
			}
		}
		
}*/
?> 
