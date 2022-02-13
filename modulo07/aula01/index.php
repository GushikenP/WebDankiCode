<?php 

	class Pessoa{
		//Objeto Pessoa

		//private - acessíveis somente à classe
		private $nome = 'Patrícia Gushiken';
		private $idade = '22';
		private $peso = '70';


		public function crescer(){
			//quando estou trabalhando dentro da classe, posso usar o this
			$this->comer();
			echo 'Estou crescendo!';
		}

		private function comer(){
			echo 'Estou comendo! <br>';
		}

		public function getNome(){
			return $this->nome;
		}

		public function getIdade(){
			return $this->idade;
		}

		public function getPeso(){
			return $this->peso;
		}

		public function setPeso($newPeso){
			$this->peso = $newPeso;
		}

		public function setIdade($newIdade){
			$this->idade = $newIdade;
		}

		public function setNome($newNome){
			$this->nome = $newNome;
		}


	}

	//classes precisam de instanciamento. Criar um objeto novo toda vez que necessário
	$pessoa = new Pessoa;


	$pessoa->setNome('Keichi');
	echo $pessoa->getNome();

	//erro, não pode acessar atributo privado
	echo $pessoa->idade;

?>