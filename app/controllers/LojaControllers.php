<?php
    namespace App\Controllers;

    class LojaControllers{
        //exibindo o index
        public function __construct(){
            $loja = \App\Models\LojaModels::index();
        }
    }