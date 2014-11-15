<?php 
	function buscaUsuario($conexao,$email,$senha){
		$senhaMd5 = md5($senha);
		$query = "select * from usuario where email = '{$email}' and senha = '{$senhaMd5}'" ;
		//var_dump($query);
		$result=mysqlI_query($conexao,$query);
		//var_dump($result);

		return mysqli_fetch_assoc($result);
	}
?>