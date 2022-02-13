<?php 
	
	//ao implementar a interface, todos os métodos devem ser declarados na classe onde ela é implementada para funcionar
	//semelhante a lógica de métodos abstrato

	//interface não pode descrever o que o método vai fazer, somente que essa interface tem esse método
	//quem dita o que esse método vai fazer é a classe onde essa interface é implementada.
	//a diferença entre interface e classe abstrata na abstração eu posso dizer o que um método vai fazer.
	interface Interface1{

		public function printOnScreen($var1);
	}

?>