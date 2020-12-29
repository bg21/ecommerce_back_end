<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require 'app/includes/head.php';
    ?>
</head>
<body>
    <?php 
        require 'app/includes/header.php';
    ?>

    <section class="body">
        <div class="container">
            <aside>
                <?php include('app/includes/sidebar.php'); ?>
            </aside>
            <main>
                <div class="flex">
                    <div class="w30">
                    </div>
                    <section class="login">
                       
                        <h2>Login</h2>

                        <form action="" class="login">
                            <div class="input_group">
                                <label for="">Email</label>
                                <input type="email" name="" id="">
                            </div>

                            <div class="input_group">
                                <label for="">Senha</label>
                                <input type="password" name="" id="">
                            </div>
                            <a href="">Esqueci a senha</a>
                        </form>

                        <button class="face" type="button">
                        <i class="fab fa-facebook-square"></i>
                        Fazer Login com o Facebook
                    </button>
                    </section>
                </div>
                
                
            </main>
        </div>
    </section>
<?php 
    require 'app/includes/footer.php';
?>
    