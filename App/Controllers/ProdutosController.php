<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Models\Produto;
    use App\Models\Info;
    use MF\Model\Container;
    
    class ProdutosController extends Action {
        
        public function produtos() {
            $produto = Container::getModel('Produto');
            $produtos = $produto->getProdutos();
            $this->view->dados = $produtos;

            $this->render('produtos', 'layoutProdutos');
        }


    }