<?php 
    require('config.php'); 
    
    $router = new \Buki\Router\Router([
    'paths' => [
        'controllers' => 'app/controllers',
        'middlewares' => 'app/middlewares',
    ],
    'namespaces' => [
        'controllers' => 'App\Controllers',
        'middlewares' => 'App\Middlewares',
    ]
    ]);

    //produtos
    $router->get('/:string', function($categoria) {
        App\Controllers\ProdutoControllers::categoria();
    });
    $router->get('/:string/:string', function($categoria, $produto) {
        App\Controllers\ProdutoControllers::produto();
    });

    //loja
    $router->get('/', function() {
        App\Controllers\LojaControllers::index();
    });
    $router->get('/carrinho', function() {
        App\Controllers\LojaControllers::carrinho();
    });

    //conta
    $router->get('/conta', function() {
        App\Controllers\ClienteControllers::index();
    });
    
    
    $router->run();

