<?php 

	//namespace - divide classes em sessões, como se fosse pasta
	namespace Sessao1;

	use Sessao2\Class2;
	class Class1
	{
		
		function __construct()
		{
			echo 'Classe1 instanciada <br>';

			//class2 está na sessão geral, pois não defini nenhum namespace para ele. Então posso acessar somente com a \
			//new \Sessao2\Class2();

			//se eu usar o use Sessao2\Class2, não preciso informar os namespaces para instanciar
			new Class2();
		}
	}

?>