<?php 
	function newPost($conexao,$titulo,$descricao,$conteudo,$user){
		
		//$query = "select * from usuario where email = '{$email}' and senha = '{$senhaMd5}'" ;
		$query = "insert into posts(titulo,descricao,conteudo,id_user) values ({$titulo},'{$descricao}','{$conteudo}',{$user});  " ;
		//var_dump($query);
		$result=mysqlI_query($conexao,$query);
var_dump($result);
	}

	
