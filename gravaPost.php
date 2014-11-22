<?php 
	$titulo = $_POST['titulo'];
	$descricao = $_POST['descricao'];
	$conteudo = $_POST['conteudo'];

	function erroMsg($campo,$msg){
		//var_dump('location: new_post.php/?msgErro='.$campo.'|'.$msg);
		header('location: new_post.php?msgErro='.$campo.'|'.$msg);
		exit;
	}

	if (empty($titulo)) {
		erroMsg('titulo','Título não informado');
	}

	if (empty($descricao)) {
		erroMsg('descricao','Descricão não informada');
	}

	if (empty($conteudo)) {
		erroMsg('conteudo','Conteúdo não informado');
	}		

	$query = "insert into "