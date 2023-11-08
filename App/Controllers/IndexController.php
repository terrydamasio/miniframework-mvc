<?php
    namespace App\Controllers;
    use MF\Controller\Action;
    
    class IndexController extends Action {
        
        public function index() {
            $this->view->dados = ["Sofá", "Cadeira" , "Mesa"];
            $this->render('index');
        }

        public function sobreNos() {
            $this->view->dados = ["Terry", "Kerry", "Joao"];
            $this->render('sobrenos');
        }

       

    }