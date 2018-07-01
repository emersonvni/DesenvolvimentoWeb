<?php
	class DB{
		public function conectar(){
			$host="localhost";
			$user="root";
			$pass="";
			$dbname="database";
			
			$conexao=mysqli_connect($host,$user,$pass);
			$selectdb=mysqli_select_db($conexao, $dbname);
			
			return $conexao;
			
		}
		
	}


?>