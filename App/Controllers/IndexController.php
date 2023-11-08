<?php
    namespace App\Controllers;

    use MF\Controller\Action;
    use App\Connection;
    use App\Models\Produto;
    
    class IndexController extends Action {
        
        public function index() {
            //$this->view->dados = ["Sofá", "Cadeira" , "Mesa"];

            //instancia de conexão com banco
            $conn = (new Connection())->getDb();

            //instancia do model
            $produto = new Produto($conn);
            $produtos = $produto->getProdutos();
            $this->view->dados = $produtos;

            $this->render('index', 'layout1');
        }

        public function sobreNos() {
            $this->view->dados = ["Terry", "Kerry", "Joao"];
            $this->render('sobrenos', 'layout2');
        }

       

    }