<?php
	
	/**
	 * 
	 */
	class Exemplo
	{
		private $var1;
		public $var2;

		//valor fixo, só posso atribuir acessando diretamente em nível de classe, e não por instancia
		public static $var3 = 'static';

		public function metodo(){
			echo 'Olá Mundo! Eu funciono fora da classe!';
		}

		private function metodo2(){
			echo 'Eu não funciono fora da classe';
		}

		public static function metodoEstatico(){
			echo 'Método estatico';
		}

	}

?>
