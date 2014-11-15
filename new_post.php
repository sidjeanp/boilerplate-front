<?php include 'header.tpl.php'; ?>
	<h1 class="title">Novo Post</h1>
	<form>
		<label>Titulo
			<input class="newpost-contentHeader" type="text" placeholder="Título" id="titulo" name="titulo">			
		</label>
		<label>Descrição
			<input class="newpost-contentHeader" type="text" placeholder="Descrição" id="descricao" name="descricao">			
		</label>
		<label>Conteúdo
			<input class="newpost-contentPost" type="textarea" placeholder="Conteúdo" id="conteudo" name="conteudo">			
		</label>
		<input class="button" type="submit" value="Postar">
	</form>
<?php include 'footer.tpl.php'; ?>