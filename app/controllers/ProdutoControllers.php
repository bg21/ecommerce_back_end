<?php 
    namespace App\Controllers;

    class ProdutoControllers{
        public static function categoria($categoria){
            $categoria = \App\Models\ProdutoModels::categoria($categoria);
        }

        public static function produto($categoria, $produto){
            $categoria = \App\Models\ProdutoModels::produto($categoria, $produto);
        }
    }
    