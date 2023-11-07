<?php
    namespace App\Controllers;

    class IndexController {
        
        public function index() {
            echo "Opa, chegamos na Action index. Essa mensagem é exclusiva.";
        }

        public function sobreNos() {
            echo "Action sobrenos";
        }

    }