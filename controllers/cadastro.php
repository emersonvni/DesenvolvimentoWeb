<?php
if($startaction == 1 && $acao == "cadastrar"){
		$nome=$_POST["nome"];
		$endereco=$_POST["endereco"];
		$email=$_POST["email"];
		$senha=$_POST["senha"];		
		
		if(empty($nome) || empty($endereco) || empty($email) || empty($senha)){
			$msg="Preencha todos os campos!";
		}
		//Todos os campos preenchidos
		else{
			//Email válido
			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				//Senha inválida
				if(strlen($senha) < 3){
					$msg="As senhas devem ter no mínimo três caracteres!";
				}
				//Senha válida
				else{
					//Executa a classe de cadastro
					$conectar=new Cadastro;
					echo"<div class=\"flash\">";
					$conectar=$conectar->cadastrar($nome, $endereco, $email, $senha); 
					echo"</div>";
				}
			}
			//E-mail inválido
			else{
				$msg="Digite seu e-mail corretamente!";
			}
		}
}

?>