<?php
    namespace App\Models;

    class ProdutoModels{
        public static function categoria($categoria){
            $verifica = Conexao::conectar()->prepare("SELECT * FROM tb_produtos WHERE categoria_slug = ?");
            $verifica->execute([$categoria]);
            if($verifica->rowCount() == 1){
                include('app/views/produtos/categoria.php');
            }else{
                include('app/views/erro.php');
            }
        }

        public static function produto($categoria, $produto){
            $verifica = Conexao::conectar()->prepare("SELECT * FROM tb_produtos WHERE categoria_slug = ? AND nome_slug = ?");
            $verifica->execute([$categoria, $produto]);
            if($verifica->rowCount() == 1){
                include('app/views/produtos/produto.php');
            }else{
                include('app/views/erro.php');
            }
            
        }

    }