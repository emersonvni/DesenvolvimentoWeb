<?php
	class Cadastro{
		public function cadastrar($nome, $endereco, $email, $senha){
			$conectar=new DB;
			$conectar=$conectar->conectar();
			//Tratamento das variáveis
			$nome=ucwords(strtolower($nome));
			$endereco=ucwords(strtolower($endereco));
			$senha=sha1($senha."desenvolvimentoWeb");
			//Inserção no banco de dados
			$validaremail=mysqli_query($conectar,"SELECT * FROM usuarios WHERE email='$email'");
			$contar=mysqli_num_rows($validaremail);
			if($contar == 0){
			$insert=mysqli_query($conectar,"INSERT INTO usuarios(nome, endereco, email, senha, nivel, status)VALUES('$nome','$endereco','$email','$senha', 2, 1)");}else{
			$flash="Desculpe, mas já existe um usuário cadastrado com este e-mail em nosso sistema!";
			// nivel 2 é adminitrador, status 1 é ativo caso queira mudar para 0 fica bloqueado, porém não foi implementado.
			}
			if(isset($insert)){
				$flash="Cadastro realizado com sucesso!";
			}else{
				if(empty($flash)){
				$flash="Ops! Houve um erro em nosso sistema, contate o administrador!";
				}
			}
			
			//Retorno para o usuário
			echo $flash;
		}
	
	}

?>