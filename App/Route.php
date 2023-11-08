<?php
    namespace App;
    use MF\Init\Bootstrap;

    class Route extends Bootstrap {

        //criar rotas
        protected function initRoutes() {
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

        
    }