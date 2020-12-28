<?php 
    require('config.php'); 

    if(isset($_GET['url']) == '' || $_GET['url'] == 'home'){
        $construct = new \App\Controllers\LojaControllers();
    }else if($_GET['url'] == 'carrinho'){
        $carrinho = \App\Controllers\LojaControllers::carrinho();
    }else{
        $erro = \App\Controllers\LojaControllers::erro();
    }


