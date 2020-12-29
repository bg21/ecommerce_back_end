<?php 
    namespace App\Controllers;

    class ClienteControllers{
        public static function login(){
            $index = \App\Models\ClienteModels::login();
        }
        public static function index(){
            $index = \App\Models\ClienteModels::index();
        }

    }
    