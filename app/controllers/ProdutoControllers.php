<?php 
    namespace App\Controllers;

    class ProdutoControllers{
        public static function categoria(){
            $categoria = \App\Models\ProdutoModels::categoria();
        }

        public static function produto(){
            $categoria = \App\Models\ProdutoModels::produto();
        }
    }
    