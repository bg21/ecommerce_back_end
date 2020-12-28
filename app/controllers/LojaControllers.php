<?php
    namespace App\Controllers;

    class LojaControllers{
        //exibindo o index
        public static function index(){
            $loja = \App\Models\LojaModels::index();
        }

        public static function carrinho(){
            $carrinho = \App\Models\LojaModels::carrinho();
        }

        

        public static function erro(){
            $erro = \App\Models\LojaModels::erro();
        }
        
    }