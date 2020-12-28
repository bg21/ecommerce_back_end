<?php
    namespace App\Models;

    class ProdutoModels{
        public static function categoria(){
            include('app/views/produtos/categoria.php');
        }

        public static function produto(){
            include('app/views/produtos/produto.php');
        }

    }