<?php
$conectar=new DB;
$conectar=$conectar->conectar();
if($startaction == 1 && $acao == "bloquear"){
		if($nivel == 2){
			if(isset($_GET["id"])){
				$id=$_GET["id"];
				$query=mysqli_query($conectar,"UPDATE usuarios SET status='0' WHERE id='$id'");
			}
		}
}
?>