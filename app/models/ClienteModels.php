<?php
    namespace App\Models;

    class ClienteModels{
        public static function login(){
            include('app/views/clientes/login.php');
        }
        public static function index(){
            include('app/views/clientes/conta.php');
        }

    }