<?php
    //exemplo: loja virtual
    //uma classe responsável para cada ação da loja virtual
    

    //Exemplo:
    //Classe Carrinho - abrir/fechar carrinho
    //Classe Frete - calcular frete
    //Classe Pedido - fechar pedido

    class Carrinho{

        public function abrirCarrinho(){
            echo 'carrinho aberto <br>';
        }

        public function fecharCarrinho(){
            echo 'carrinho fechado <br>';
        }
    }

    class Frete{
        public function calcularFrete(){
            //código
        }
    }

    class Pedido{
        public function fecharPedido(){
            //código
        }
    }

    class Loja{
        public function finalizarCompra(){
            /* //método tradicional
            $carrinho = new Carrinho();
            $carrinho->abrirCarrinho();

            $frete = new Frete();
            $frete->calcularFrete(); */

            //método facade
            $this->abrirCarrinho();
            $this->calcularFrete();

            

        }

    //uma única classe (Loja) vai ser responsável por executar as ações sem precisar instanciar todas as classes (Carrinho, Frete....)
        public function fecharCarrinho(){
            $carrinho = new Carrinho();
            $carrinho->fecharCarrinho();
        }
    }

    $loja = new Loja();
    $loja->finalizarCompra();

?>