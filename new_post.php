<?php include 'header.tpl.php';?>
<?php include 'conexao.php'; ?>
<?php include 'publicNewPost.php'; ?>
<?php 
	if ((isset($_GET['msgErro']))) {
		$pMsg = $_GET['msgErro'];
		//var_dump($pMsg);
		$arrMsg = explode('|', $_GET['msgErro']);
		$field = $arrMsg[0];
		$msgEv = $arrMsg[1];
		
} else {
		$field = '';
		$msgEv = '';	
}


?>

	<h1 class="title">Novo Post</h1>
	<form class="login"  action="gravaPost.php" method="POST">
		<label>Titulo
			<input class="login-email <?php if($field == 'titulo') echo 'isErro';?>" type="text" placeholder="Título" id="titulo" name="titulo">			
		</label>
		<label>Descrição
			<input class="login-email <?php if($field == 'descricao') echo 'isErro';?>" type="text" placeholder="Descrição" id="descricao" name="descricao">			
		</label>
		<label>Conteúdo
			<input class="login-email <?php if($field == 'conteudo') echo 'isErro';?>" type="textarea" placeholder="Conteúdo" id="conteudo" name="conteudo">			
		</label>
		<input class="button" type="submit" value="Postar">
	</form>
<?php include 'footer.tpl.php'; ?>