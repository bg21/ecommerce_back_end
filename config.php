<?php
    session_start();
    ob_start();
    date_default_timezone_set('America/Sao_Paulo');
    require __DIR__ . "/vendor/autoload.php";

    define('INCLUDE_PATH','http://localhost/Projetos/ecommerce/');
    
    
    

    //Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
    define('DATABASE','ecommerce');
   