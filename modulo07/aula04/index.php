<?php 
	

	//serve apenas para ser herdada, não pode ser instanciada
	abstract class Abstrata{

		// posso ter N métodos e M atributos

		public function funcao1(){
			echo 'chamando função 1 da classe abstrata<br>';
		}

		//função abstrata: em todas as classes que forem herdar esta classe, é necessário criar a função abstrata para não dar erro
		abstract function funcao2();

	}

	class Principal2{
		public static function outroMetodoEstatico(){
			echo 'outro método estático';
		}
	}

	class Principal extends Abstrata{

		public function funcao2(){
			echo 'estou declarando oficialmente um método abstrato.';
		}

		public static function metodoEstatico(){
			echo 'método estatico <br>';
		}

		public function funcao3(){
			//Principal::metodoEstatico();
			//self::metodoEstatico();
			Principal2::outroMetodoEstatico();
		}

	}

	$principal = new Principal();
	//$principal->metodoEstatico();
	//$principal->funcao1();
	//$principal->funcao2();
	$principal->funcao3();

?>