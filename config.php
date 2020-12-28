<?php
    session_start();
    require __DIR__ . "/vendor/autoload.php";

    define('INCLUDE_PATH','http://localhost/Projetos/ecommerce/');
    
    
    

    //Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
    define('DATABASE','ecommerce');
    
    \App\Class\Conexao::conectar();
    new \App\Controllers\LojaControllers();