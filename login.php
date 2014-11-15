<?php include 'header.tpl.php'; ?>
<?php include 'conexao.php'; ?>
<?php include 'banco-usuario.php'; ?>


<?php 
	if (isset($_POST["email"]) and $_POST["senha"] != null){
	if (!buscaUsuario($conexao,$_POST["email"],$_POST["senha"])==null) {
		header("location: new_post.php");
		
	}
	else{

		echo "Login ou senha inválido.";
	}
}

?>
	<h1 class="title">Login</h1>
	<form class="login" action="login.php" method="POST">
		<input class="login-email" type="email" placeholder="E-mail" id="email" name="email">
		<input class="login-pass" type="password" placeholder="Senha" id="senha" name="senha">
		<input class="button" type="submit">
	</form>
<?php include 'footer.tpl.php'; ?>