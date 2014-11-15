<?php

class Seo {

	private static $title = 'Blog teste';
	private static $desc_default = 'DESCRIPTION';
	private static $url = 'DOMINIO_DO_SITE.com.br';
	
	public static function metas() {
		$self = $_SERVER['PHP_SELF'];
		$p = explode('/', $self);
		
		return self::pg( end( $p ) );
	}

	public static function getUrl() {
		return 'http://' . self::$url;
	}
	
	public static function getDomain() {
		return self::$url;
	}
	
	private static function pg( $pg ) {
		switch( $pg )
		{				
			case '404.html':
				$arr['desc'] = 'Ocorreu um erro no carregamento do site. ' . self::$desc_default;
				$arr['title'] = 'Bla bla - ' . self::$title.' - 404';
				$arr['canonical'] = self::getUrl() . '/interna.html';
				break;
				
			case 'home':
				$arr['desc'] = 'Bla bla ' . self::$desc_default;
				$arr['title'] = self::$title;
				$arr['canonical'] = self::getUrl();
				break;

			case 'contatos.php':
				$arr['desc'] = 'Contatos do blog' . self::$desc_default;
				$arr['title'] = self::$title.' - Contatos';
				$arr['canonical'] = self::getUrl();
				break;		

			case 'login.php':
				$arr['desc'] = 'Login de acesso para publicação' . self::$desc_default;
				$arr['title'] = self::$title.' - Login';
				$arr['canonical'] = self::getUrl();
				break;

			case 'new_post.php':
				$arr['desc'] = 'Inserir post' . self::$desc_default;
				$arr['title'] = self::$title.' - Novo';
				$arr['canonical'] = self::getUrl();
				break;											

			default:
				$arr['desc'] = self::$desc_default;
				$arr['title'] = self::$title;
				$arr['canonical'] = self::getUrl();
				break;
		}
	
		return $arr;
	}
}//Seo
