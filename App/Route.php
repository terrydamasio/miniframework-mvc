<?php
    namespace App;

    class Route {

        private $routes;

        public function __construct()
        {
            $this->initRoutes();
            $this->run($this->getUrl());
        }

        public function getRoutes() {
            return $this->routes;
        }

        public function setRoutes(array $routes) {
            $this->routes = $routes;
        }

        //2) criar rotas
        public function initRoutes() {
            $routes['home'] = array(
                'route' => '/',
                'controller' => 'IndexController',
                'action' => 'index'
            );

            $routes['sobre_nos'] = array(
                'route' => '/sobrenos',
                'controller' => 'IndexController',
                'action' => 'sobrenos'
            );

            $this->setRoutes($routes);
        }   

        public function run($url) {
            foreach($this->getRoutes() as $key => $route) {
                
                if($url == $route['route']) {
                    $class = "App\\Controllers\\" . ucfirst($route['controller']); // -> App\Controllers\[Controller]

                    $controller = new $class; // -> $controller = new App\Controllers\[Controller];
                    
                    $action = $route['action'];

                    $controller->$action();
                }
            }
        }

        //1) capturar url
        public function getUrl() {
            return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
            //$_SERVER captura todos os dados do servidor
            //parse_url retorna um array especificando os seus componentes
        }
    }