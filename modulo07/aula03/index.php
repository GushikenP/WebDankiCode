<?php 
	
	//classes do tipo final não podem ser herdadas
	class Filha{


		//pode ser chamada dentro da própria classe ou pela classe que herda esta
		protected function funcaoTeste(){
			echo 'chamando função protegida<br>';
		}

		public function cumprimentos(){
			echo 'OLÁ MUNDO! Eu venho da classe Filha <br>';
			
			//chamada da função dentro da própria classe
			//$this->privada();
		}

		private function privada(){
			echo 'Sou uma função privada <br>';
		}

		public function herdada(){
			echo 'Esta é uma função herdada <br>';
		}

		
	}


	//herança
	//extends herda todos os metodos e atributos da classe
	//vai dar erro, porque a classe filha não pode ser herdada (final class)
	class Pai extends Filha{

		public function cumprimentos(){

			//se eu quiser chamar a função original (da filha)
			parent::cumprimentos();

			echo '<br> OLÁ MUNDO! eu venho da classe pai, esta deve sobrescrever a função da filha quando eu chamar <br>';
			
			//chamada da função dentro da própria classe
			//$this->privada();
		}

		public function despedir(){
			echo 'TCHAU MUNDO! <br>';

			//protected funcion - ok
			$this->funcaoTeste();

			//private function - erro
			//$this->privada();
		}
	}
	$pai = new Pai();

	$pai->cumprimentos();

	$pai->despedir();
	$pai->cumprimentos();
	/*
	$pai = new Pai();
	$pai->despedir();

	$filha = new Filha();
	$filha->cumprimentos();

	$pai->herdada();

	$pai->funcaoTeste();
	*/
?>