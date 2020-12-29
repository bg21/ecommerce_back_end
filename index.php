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
    $router->get('/:slug', function($categoria) {
        App\Controllers\ProdutoControllers::categoria($categoria);
    });
    $router->get('/:slug/:slug', function($categoria, $produto) {
        App\Controllers\ProdutoControllers::produto($categoria, $produto);
    });

    //loja
    $router->get('/', function() {
        App\Controllers\LojaControllers::index();
    });
    $router->get('/carrinho', function() {
        App\Controllers\LojaControllers::carrinho();
    });
    
    //conta
    $router->get('/login', function() {
        App\Controllers\ClienteControllers::login();
    });
    $router->get('/conta', function() {
        App\Controllers\ClienteControllers::index();
    });
    
    
    $router->run();

