<?php
    namespace App\Models;

    class LojaModels{
        public static function index(){
            include('app/views/home.php');
        }

        public static function carrinho(){
            include('app/views/carrinho.php');
        }

        public static function erro(){
            include('app/views/erro.php');
        }
    }